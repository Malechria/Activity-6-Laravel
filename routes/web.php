<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Character;
use App\Models\Superpower;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\UniverseController; // Importamos el nuevo controlador


// --- ACTIVIDAD FINAL: CRUD Completo ---
// El método resource crea automáticamente las 7 rutas requeridas (index, create, store, show, edit, update, destroy)
Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperheroController::class);


// --- ACTIVIDADES ANTERIORES ---

Route::get('/superpowers', function () {
    $superpowers = Superpower::all();
    return view('superpowers', compact('superpowers'));
});

Route::get('/actividad7/universe', function () {
   
    $nuevoUniverso = Universe::create([
        'universe' => 'Image Comics',
        'company' => 'Image',
        'age' => 'Modern'
    ]);

    $nuevoUniverso->update([
        'age' => 'Contemporary Era' 
    ]);

    $resultado = Universe::with('characters')->find($nuevoUniverso->id);

    return $resultado;
});

Route::get('/actividad7/superhero', function () {

    $nuevoHeroe = Character::create([
        'name' => 'Flash',
        'real_name' => 'Barry Allen',
        'gender' => 'Male',
        'universe_id' => 1 
    ]);

    $nuevoHeroe->update([
        'real_name' => 'Wally West' 
    ]);

    $resultado = Character::with('universe')->find($nuevoHeroe->id);

    return $resultado;
});

