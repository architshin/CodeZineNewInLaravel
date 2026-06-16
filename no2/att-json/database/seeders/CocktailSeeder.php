<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = [
            [
                'name' => 'Martini',
                'base_spirit' => 'Gin',
                'description' => 'A classic cocktail made with gin and vermouth.',
                'recipe' => '2 1/2 oz Gin, 1/2 oz Dry Vermouth. Stir with ice and strain.',
                'price' => 1200,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Mojito',
                'base_spirit' => 'Rum',
                'description' => 'A refreshing Cuban cocktail.',
                'recipe' => '2 oz White Rum, 1 oz Lime Juice, 2 tsp Sugar, Mint leaves, Soda water.',
                'price' => 1000,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Margarita',
                'base_spirit' => 'Tequila',
                'description' => 'A Mexican cocktail consisting of tequila, orange liqueur, and lime juice.',
                'recipe' => '2 oz Tequila, 1 oz Lime Juice, 1 oz Cointreau. Shake with ice.',
                'price' => 1100,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Old Fashioned',
                'base_spirit' => 'Whiskey',
                'description' => 'One of the oldest known cocktail recipes.',
                'recipe' => '2 oz Bourbon or Rye whiskey, 3 dashes Angostura bitters, 1 sugar cube, Splash of water.',
                'price' => 1300,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Virgin Mary',
                'base_spirit' => 'None',
                'description' => 'A non-alcoholic version of the Bloody Mary.',
                'recipe' => '3 oz Tomato juice, 1/2 oz Lime juice, Dash of Worcestershire sauce, Tabasco, Salt, Pepper.',
                'price' => 800,
                'is_alcoholic' => false,
            ],
        ];

        foreach ($cocktails as $cocktail) {
            Cocktail::create($cocktail);
        }

        // Create 10 more random cocktails
        Cocktail::factory()->count(10)->create();
    }
}
