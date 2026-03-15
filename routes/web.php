<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Character;
use App\Models\Superpower;
use App\Http\Controllers\SuperheroController;


Route::get('/universes', function () {
    $universes = Universe::all(); 
    return view('universes', compact('universes'));
});

// Activity - 8
Route::get('/superheroes', [SuperheroController::class, 'index']);
Route::get('/superheroes/create', [SuperheroController::class, 'create']);
Route::post('/superheroes', [SuperheroController::class, 'store']);

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
