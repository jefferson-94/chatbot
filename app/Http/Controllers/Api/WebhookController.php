<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\JsonLog;
use App\Models\Message;
use App\Models\WhatsappAccount;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    // Verificação do webhook da Meta (GET)
    public function verify(Request $request)
    {
        $verify_token = env('META_VERIFY_TOKEN');

        if (
            $request->hub_mode === 'subscribe' &&
            $request->hub_verify_token === $verify_token
        ) {
            return response($request->hub_challenge, 200);
        }

        return response('Token inválido', 403);
    }

    // Recebe mensagens (POST)
    public function receive(Request $request)
    {
        $data = $request->all();
        $json = $request->getContent();

        // 🔹 Salva o JSON completo no .txt para testes
        $logFile = storage_path('logs/whatsapp_messages.txt');
        file_put_contents($logFile, now() . " - RECEBIDO:\n" . json_encode($data, JSON_PRETTY_PRINT) . "\n\n", FILE_APPEND);

        // Log::error('Erro no login: ' .  $json);
        // 🔹 Salvar JSON no banco (json_logs)
        $jsonNormalized = json_encode(json_decode($json), JSON_UNESCAPED_UNICODE);
        $entryId = $data['entry'][0]['id'] ?? null;
       // $messages = $data['entry'][0]['changes'][0]['value']['messages'] ?? [];

        // Se não tiver entry, retorna
        if (!isset($data['entry'])) {
            return response()->json(['status' => 'no_entry'], 200);
        }
        //Log::error('Erro no login: ' .  $entryId);

        // Loop para salvar as mensagens na tabela `jsonlog`
        foreach ($data['entry'] as $entry) {
            foreach ($entry['changes'] as $change) {
                $value = $change['value'];

                // Aqui estamos tratando a inserção de logs do JSON
                $phoneNumberId = $value['metadata']['phone_number_id'] ?? null;
                $account = WhatsappAccount::where('phone_number_id', $phoneNumberId)->first();

                if (!$account) {
                    continue;
                }

                // Iterando sobre as mensagens
                foreach ($value['messages'] ?? [] as $msg) {
                    $messageId = $msg['id'] ?? null;
                    $type = $msg['type'] ?? null;

                    // Verifica se o registro da mensagem já existe no log
                    $exists = JsonLog::where('message_id', $messageId)->exists();

                    if (!$exists) {
                        // Cria o log no banco se não existir
                        JsonLog::create([
                            'entry_id' => $entryId,         // Salva o entry_id
                            'message_id' => $messageId,     // Salva o message_id
                            'type' => $type,                // Salva o tipo da mensagem (text, image, etc.)
                            'payload' => $jsonNormalized,   // Salva o JSON completo na tabela
                        ]);
                    }

                    $from = $msg['from'];
                    $name = $value['contacts'][0]['profile']['name'] ?? null;
                    $timestamp = $msg['timestamp'];

                    $conversation = Conversation::firstOrCreate([
                        'whatsapp_account_id' => $account->id,
                        'customer_number' => $from,
                        'is_active' => true,
                    ], [
                        'customer_name' => $name,
                    ]);

                    $content = null;
                    $media = null;
                    if ($type === 'text') {
                        $content = $msg['text']['body'];
                    } elseif (in_array($type, ['image', 'audio', 'video', 'document'])) {
                        $mediaId = $msg[$type]['id'] ?? null;

                        $path = null;
                        if ($mediaId) {
                            $ext = match ($type) {
                                'audio' => 'ogg',
                                'video' => 'mp4',
                                'image' => 'jpg',
                                'document' => 'pdf',
                                default => 'bin',
                            };

                            $fileName = "{$type}_" . uniqid() . ".$ext";
                            $savePath = "whatsapp-media/{$conversation->id}/$fileName";

                            $path = $this->baixarMidiaWhatsApp($mediaId, $account->access_token, $savePath);
                        }

                        $media = [
                            'type' => $type,
                            'file_path' => $path,
                            'id' => $mediaId,
                            'caption' => $msg[$type]['caption'] ?? null,
                            'mime_type' => $msg[$type]['mime_type'] ?? null,
                            'sha256' => $msg[$type]['sha256'] ?? null,
                        ];

                        $content = strtoupper($type) . ' recebido';
                    } elseif ($type === 'location') {
                        $media = [
                            'type' => 'location',
                            'latitude' => $msg['location']['latitude'],
                            'longitude' => $msg['location']['longitude'],
                            'name' => $msg['location']['name'] ?? null,
                            'address' => $msg['location']['address'] ?? null,
                        ];
                        $content = 'Localização recebida';
                    } else {
                        $content = 'Tipo de mensagem não tratada: ' . $type;
                    }

                    Message::create([
                        'conversation_id' => $conversation->id,
                        'sender_type' => 'client',
                        'content' => $content,
                        'media' => $media,
                        'sent_at' => date('Y-m-d H:i:s', $timestamp),
                        'raw_payload' => json_encode($msg, JSON_UNESCAPED_UNICODE),
                    ]);
                }
            }
        }

        return response()->json(['status' => 'success'], 200);
    }

    private function baixarMidiaWhatsApp(string $mediaId, string $token, string $savePath): ?string
    {
        try {
            // Etapa 1: obter URL temporária
            $response = Http::withToken($token)
                ->get("https://graph.facebook.com/v23.0/{$mediaId}");

            if (!$response->ok()) return null;

            $mediaUrl = $response->json()['url'];

            // Etapa 2: baixar conteúdo da URL
            $fileResponse = Http::withToken($token)->get($mediaUrl);

            if (!$fileResponse->ok()) return null;

            Storage::disk('public')->put($savePath, $fileResponse->body());

            return $savePath;
        } catch (\Throwable $e) {
            return null;
        }
    }
}
