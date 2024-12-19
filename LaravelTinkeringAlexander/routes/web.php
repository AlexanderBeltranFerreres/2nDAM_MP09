<?php

use App\Http\Controllers\PeliculesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelicules', [PeliculesController::class, 'getAll'])->name('pelicules.index');

Route::get('/crearPeli', [PeliculesController::class, 'createPeli'])->name('crearPeli'); // Mostra el formulari
Route::post('/crearPeli', [PeliculesController::class, 'createPeli']); // Guarda una nova peli

Route::get('/regals', function () {
    return view('regals');
});
