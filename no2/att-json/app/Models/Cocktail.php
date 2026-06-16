<?php

namespace App\Models;

use Database\Factories\CocktailFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table('cocktails')]
#[Fillable(['name', 'base_spirit', 'description', 'recipe', 'price', 'is_alcoholic'])]
class Cocktail extends Model
{
    /** @use HasFactory<CocktailFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_alcoholic' => 'boolean',
            'price' => 'integer',
        ];
    }
}
