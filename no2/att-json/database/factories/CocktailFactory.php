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
     * The name of the factory's corresponding model.
     *
     * @var class-string<Cocktail>
     */
    protected $model = Cocktail::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(2, true),
            'base_spirit' => $this->faker->randomElement(['Gin', 'Vodka', 'Rum', 'Tequila', 'Whiskey', 'Brandy']),
            'description' => $this->faker->sentence(),
            'recipe' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(1000, 2500),
            'is_alcoholic' => true,
        ];
    }
}
