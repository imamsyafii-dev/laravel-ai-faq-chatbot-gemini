<?php

namespace App\Http\Controllers;

use App\Ai\Agents\ChatAgent;
use Illuminate\Http\Request;
use Laravel\Ai\Enums\Lab;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:2000'],
        ]);

        $response = (new ChatAgent)->prompt(
            $validated['message'],
            provider: Lab::Gemini,
            model: 'gemini-3.5-flash-lite',
        );

        return view('chat', [
            'question' => $validated['message'],
            'answer' => (string) $response,
        ]);
    }
}