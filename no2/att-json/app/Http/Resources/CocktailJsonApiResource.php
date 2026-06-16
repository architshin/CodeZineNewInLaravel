<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class CocktailJsonApiResource extends JsonApiResource
{
    /**
     * The resource's attributes.
     */
    public $attributes = [
        'name',
        'base_spirit',
        'description',
        'recipe',
        'price',
        'is_alcoholic',
    ];

    /**
     * Get the resource's type.
     */
    public function toType(Request $request): string
    {
        return 'cocktails';
    }
}
