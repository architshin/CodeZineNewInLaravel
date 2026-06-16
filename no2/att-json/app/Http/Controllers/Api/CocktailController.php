<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CocktailJsonApiResource;
use App\Http\Resources\CocktailResource;
use App\Models\Cocktail;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CocktailController extends Controller
{
    /**
     * Display a listing of the cocktails in standard format.
     */
    public function index(): AnonymousResourceCollection
    {
        return CocktailResource::collection(Cocktail::all());
    }

    /**
     * Display a listing of the cocktails in JSON:API format.
     */
    public function jsonApiIndex(): AnonymousResourceCollection
    {
        return CocktailJsonApiResource::collection(Cocktail::all());
    }
}
