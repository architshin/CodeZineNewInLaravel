<?php

use App\Models\Cocktail;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('it displays the cocktails list page', function () {
    Cocktail::factory()->count(3)->create();

    $response = $this->get(route('cocktails.index'));

    $response->assertStatus(200);
    $response->assertSee('Our Cocktails');
    $response->assertSee(Cocktail::first()->name);
});

test('it handles empty cocktails list', function () {
    $response = $this->get(route('cocktails.index'));

    $response->assertStatus(200);
    $response->assertSee('Our Cocktails');
});
