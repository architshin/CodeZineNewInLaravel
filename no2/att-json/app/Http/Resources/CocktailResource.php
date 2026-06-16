<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CocktailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'base_spirit' => $this->base_spirit,
            'description' => $this->description,
            'recipe' => $this->recipe,
            'price' => $this->price,
            'is_alcoholic' => $this->is_alcoholic,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
