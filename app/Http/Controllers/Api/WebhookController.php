<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\WhatsappAccount;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

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

        // 🔹 Salva o JSON completo no .txt para testes
        $logFile = storage_path('logs/whatsapp_messages.txt');
        file_put_contents($logFile, now() . " - RECEBIDO:\n" . json_encode($data, JSON_PRETTY_PRINT) . "\n\n", FILE_APPEND);

        if (!isset($data['entry'])) {
            return response()->json(['status' => 'no_entry'], 200);
        }

        foreach ($data['entry'] as $entry) {
            foreach ($entry['changes'] as $change) {
                $value = $change['value'];

                $phoneNumberId = $value['metadata']['phone_number_id'] ?? null;
                $account = WhatsappAccount::where('phone_number_id', $phoneNumberId)->first();

                if (!$account) {
                    continue;
                }

                foreach ($value['messages'] ?? [] as $msg) {
                    $from = $msg['from'];
                    $name = $value['contacts'][0]['profile']['name'] ?? null;
                    $type = $msg['type'];
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
                                'document' => 'pdf', // ou outro
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
                ->get("https://graph.facebook.com/v18.0/{$mediaId}");

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
