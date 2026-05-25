<?php

use App\Http\Controllers\CocktailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cocktails', [CocktailController::class, 'index'])->name('cocktails.index');
