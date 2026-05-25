<?php

namespace Database\Factories;

use App\Models\Cocktail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cocktail>
 */
class CocktailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'recipe' => $this->faker->paragraph(),
            'image_url' => 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&q=80&w=400&h=300',
        ];
    }
}
