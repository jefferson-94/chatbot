<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;

class ChatController extends Controller
{
    public function index()
    {
        $conversations = Conversation::with('lastMessage')->latest()->get();

        return view('chat.index', compact('conversations'));
    }

    public function show(Conversation $conversation)
    {
        $messages = $conversation->messages()->latest()->get()->reverse();

        return view('chat.index', [
            'conversations' => Conversation::with('lastMessage')->latest()->get(),
            'activeConversation' => $conversation,
            'messages' => $messages,
        ]);
    }
    public function send(Request $request, Conversation $conversation)
    {
        $request->validate(['message' => 'required|string']);

        $conversation->messages()->create([
            'sender_type' => 'user',
            'user_id' => auth()->id(),
            'content' => $request->message,
            'sent_at' => now(),
        ]);

        return redirect()->route('chat.show', $conversation->id);
    }
}
