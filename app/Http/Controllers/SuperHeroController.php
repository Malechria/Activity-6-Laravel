<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character; // Superheroes model
use App\Models\Universe;
class SuperheroController extends Controller
{
    // INDEX
    public function index()
    {
        $superheroes = Character::all();
        return view('superheroes', compact('superheroes'));
    }

    // CREATE
    public function create()
    {
        $universes = Universe::all();
        return view('superheroes_create', compact('universes'));
    }

    // STORE
    public function store(Request $request)
    {
        Character::create([
            'name' => $request->name,
            'real_name' => $request->real_name,
            'gender' => $request->gender,
            'universe_id' => $request->universe_id
        ]);

        return redirect('/superheroes');
    }
}