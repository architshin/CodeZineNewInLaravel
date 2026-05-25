<?php

use App\Ai\Agents\ChatAgent;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

uses(LazilyRefreshDatabase::class);

it('can display the chat page', function () {
    $response = $this->get(route('chat.index'));

    $response->assertStatus(200);
});

it('can send a prompt to Gemini and display the response', function () {
    ChatAgent::fake(['Hello! I am Gemini.']);

    $response = $this->withoutMiddleware()->post(route('chat.store'), [
        'prompt' => 'Hi Gemini',
    ]);

    $response->assertStatus(302);
    $response->assertSessionHas('prompt', 'Hi Gemini');
    $response->assertSessionHas('response', 'Hello! I am Gemini.');

    ChatAgent::assertPrompted('Hi Gemini');
});
