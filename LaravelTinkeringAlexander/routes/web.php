<?php

use App\Http\Controllers\PeliculesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelicules', [PeliculesController::class, 'getAll'])->name('pelicules.index');

Route::get('/crearPeli', [PeliculesController::class, 'createPeli'])->name('crearPeli'); // Mostra el formulari
Route::post('/crearPeli', [PeliculesController::class, 'createPeli']); // Guarda una nova peli

Route::get('/pelicules/{id}/modificarPeli', [PeliculesController::class, 'editPeli'])->name('editarPeli'); // Mostra les antigues dades
Route::put('/pelicules/{id}/modificarPeli', [PeliculesController::class, 'editPeli']); // Guarda les noves dades

Route::delete('/pelicules/{id}', [PeliculesController::class, 'destroy'])->name('pelicules.destroy');

Route::get('/pelicules/{id}/veurePeli', [PeliculesController::class, 'listPeli'])->name('veurePeli'); // Mostra les antigues dades

Route::get('/regals', function () {
    return view('regals');
});
