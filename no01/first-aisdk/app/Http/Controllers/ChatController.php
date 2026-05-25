<?php

namespace App\Http\Controllers;

use App\Ai\Agents\ChatAgent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'prompt' => ['required', 'string'],
        ]);

        $response = (new ChatAgent)->prompt($validated['prompt']);

        return back()->with([
            'prompt' => $validated['prompt'],
            'response' => $response->text,
        ]);
    }
}
