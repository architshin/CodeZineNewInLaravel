<?php

use App\Http\Controllers\Api\CocktailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cocktails', [CocktailController::class, 'index']);
Route::get('/json-api/cocktails', [CocktailController::class, 'jsonApiIndex']);
