<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculesController extends Controller
{

    public function index() {
        $pelicules = Pelicula::all();
        return view('pelicules', ['pelicules' => $pelicules]);
    }

}
