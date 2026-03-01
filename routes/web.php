<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Character;
use App\Models\Superpower;

// Ruta para Universos
Route::get('/universes', function () {
    $universes = Universe::all(); 
    return view('universes', compact('universes'));
});

// Ruta para Superhéroes
Route::get('/superheroes', function () {
    $superheroes = Character::all();
    return view('superheroes', compact('superheroes'));
});

// Ruta para Superpoderes
Route::get('/superpowers', function () {
    $superpowers = Superpower::all();
    return view('superpowers', compact('superpowers'));
});