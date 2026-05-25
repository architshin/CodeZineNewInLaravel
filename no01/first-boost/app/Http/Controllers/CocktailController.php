<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\View\View;

class CocktailController extends Controller
{
    /**
     * Display a listing of cocktails.
     */
    public function index(): View
    {
        $cocktails = Cocktail::latest()->paginate(12);

        return view('cocktails.index', compact('cocktails'));
    }
}
