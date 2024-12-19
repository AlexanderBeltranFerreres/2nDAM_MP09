<?php

use App\Http\Controllers\PeliculesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelicules', [PeliculesController::class, 'getAll'])->name('pelicules.index');


Route::get('/regals', function () {
    return view('regals');
});
