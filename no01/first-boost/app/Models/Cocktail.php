<?php

namespace App\Models;

use Database\Factories\CocktailFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    /** @use HasFactory<CocktailFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'recipe',
        'image_url',
    ];
}
