<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index() {
        $universes = Universe::all();
        return view('universes', compact('universes'));
    }

    public function create() {
        return view('universes_create');
    }

    public function store(Request $request) {
        Universe::create($request->all());
        return redirect('/universes');
    }

    public function show($id) {
        $universe = Universe::find($id);
        return view('universes_show', compact('universe'));
    }

    public function edit($id) {
        $universe = Universe::find($id);
        return view('universes_edit', compact('universe'));
    }

    public function update(Request $request, $id) {
        $universe = Universe::find($id);
        $universe->update($request->all());
        return redirect('/universes');
    }

    public function destroy($id) {
        Universe::destroy($id);
        return redirect('/universes');
    }
}
