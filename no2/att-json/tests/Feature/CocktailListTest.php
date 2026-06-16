<?php

use App\Models\Cocktail;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('displays the cocktail list', function () {
    $cocktail = Cocktail::factory()->create([
        'name' => 'Test Cocktail',
        'price' => 1500,
    ]);

    $response = $this->get('/cocktails');

    $response->assertStatus(200);
    $response->assertSee('Test Cocktail');
    $response->assertSee('¥1,500');
});

it('shows alcoholic status correctly', function () {
    Cocktail::factory()->create([
        'name' => 'Alcoholic Drink',
        'is_alcoholic' => true,
    ]);

    Cocktail::factory()->create([
        'name' => 'Non-Alcoholic Drink',
        'is_alcoholic' => false,
    ]);

    $response = $this->get('/cocktails');

    $response->assertSee('Alcoholic Drink');
    $response->assertSee('Alcoholic');
    $response->assertSee('Non-Alcoholic Drink');
    $response->assertSee('Non-Alcoholic');
});
