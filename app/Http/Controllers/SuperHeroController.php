<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index() {
        $superheroes = Character::all();
        return view('superheroes', compact('superheroes'));
    }

    public function create() {
        $universes = Universe::all();
        return view('superheroes_create', compact('universes'));
    }

    public function store(Request $request) {
        Character::create($request->all());
        return redirect('/superheroes');
    }

    public function show($id) {
        // Buscamos el héroe con su universo para que no falle la vista
        $superhero = Character::with('universe')->find($id);
        return view('superheroes_show', compact('superhero'));
    }

    public function edit($id) {
        $superhero = Character::find($id);
        $universes = Universe::all();
        return view('superheroes_edit', compact('superhero', 'universes'));
    }

    public function update(Request $request, $id) {
        $superhero = Character::find($id);
        $superhero->update($request->all());
        return redirect('/superheroes');
    }

    public function destroy($id) {
        Character::destroy($id);
        return redirect('/superheroes');
    }
}