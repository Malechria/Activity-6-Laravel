<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Character;
use App\Models\Superpower;

// --- RUTAS DE LA ACTIVIDAD 6 (Vistas de Tablas) ---

Route::get('/universes', function () {
    $universes = Universe::all(); 
    return view('universes', compact('universes'));
});

Route::get('/superheroes', function () {
    $superheroes = Character::all();
    return view('superheroes', compact('superheroes'));
});

Route::get('/superpowers', function () {
    $superpowers = Superpower::all();
    return view('superpowers', compact('superpowers'));
});


// --- RUTAS DE LA ACTIVIDAD 7 (CRUD y Relaciones) ---

// Ruta 1: Universo (Create, Update, Read)
Route::get('/actividad7/universe', function () {
    // 1. CREATE (Crear)
    $nuevoUniverso = Universe::create([
        'universe' => 'Image Comics',
        'company' => 'Image',
        'age' => 'Modern'
    ]);

    // 2. UPDATE (Actualizar/Editar)
    $nuevoUniverso->update([
        'age' => 'Contemporary Era' // Cambiamos la era
    ]);

    // 3. READ (Leer el elemento editado CON su relación)
    // Usamos with('characters') para traer a los superhéroes que le pertenecen
    $resultado = Universe::with('characters')->find($nuevoUniverso->id);

    return $resultado;
});

// Ruta 2: Superhéroe (Create, Update, Read)
Route::get('/actividad7/superhero', function () {
    // 1. CREATE (Crear asignándolo al universo 1 que es DC)
    $nuevoHeroe = Character::create([
        'name' => 'Flash',
        'real_name' => 'Barry Allen',
        'gender' => 'Male',
        'universe_id' => 1 
    ]);

    // 2. UPDATE (Actualizar/Editar)
    $nuevoHeroe->update([
        'real_name' => 'Wally West' // Cambiamos su nombre real
    ]);

    // 3. READ (Leer el elemento editado CON la información de su universo)
    // Usamos with('universe') para que traiga los datos del universo DC
    $resultado = Character::with('universe')->find($nuevoHeroe->id);

    return $resultado;
});
