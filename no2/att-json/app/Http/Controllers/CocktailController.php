<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Contracts\View\View;

class CocktailController extends Controller
{
    /**
     * Display a listing of the cocktails.
     */
    public function index(): View
    {
        $cocktails = Cocktail::all();

        return view('cocktails.index', compact('cocktails'));
    }
}
