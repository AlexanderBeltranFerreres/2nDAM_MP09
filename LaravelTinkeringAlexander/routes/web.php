<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelicules', [\App\Http\Controllers\PeliculesController::class, 'index'])->name('pelicules.index');


Route::get('/regals', function () {
    return view('regals');
});
