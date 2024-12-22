<?php

use App\Http\Controllers\PeliculesController;
use App\Http\Controllers\RegalsController;
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

Route::get('/pelicules/{id}/veurePeli', [PeliculesController::class, 'listPeli'])->name('veurePeli');

Route::get('/regals', [RegalsController::class, 'getAll'])->name('regals.index');

Route::get('/crearRegal', [RegalsController::class, 'createRegal'])->name('crearRegal'); // Mostra el formulari
Route::post('/crearRegal', [RegalsController::class, 'createRegal']); // Guarda una nova peli

Route::get('/regals/{id}/modificarRegal', [RegalsController::class, 'editRegal'])->name('editarRegal'); // Mostra les antigues dades
Route::put('/regals/{id}/modificarRegal', [RegalsController::class, 'editRegal']); // Guarda les noves dades

Route::delete('/regals/{id}', [RegalsController::class, 'destroy'])->name('regals.destroy');

Route::get('/regals/{id}/veureRegal', [RegalsController::class, 'listRegal'])->name('veureRegal');
