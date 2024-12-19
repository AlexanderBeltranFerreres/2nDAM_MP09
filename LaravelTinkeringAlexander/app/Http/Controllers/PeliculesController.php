<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculesController extends Controller
{

    public function getAll() {
        $pelicules = Pelicula::all();
        return view('pelicules', ['pelicules' => $pelicules]);
    }

    public function createPeli(Request $request) {
        // Si el mètode és POST, valida les dades rebudes del formulari
        if ($request->isMethod('post')) {
            $request->validate([
                'Titol' => 'required|string|max:255',
                'Any' => 'required|integer',
                'Genere' => 'required|string|max:255',
                'Sinopsi' => 'nullable|string',
                'Director' => 'required|string|max:255',
            ]);

            // Crea un nou registre a la taula Pelicules
            Pelicula::create([
                'Titol' => $request->input('Titol'),
                'Any' => $request->input('Any'),
                'Genere' => $request->input('Genere'),
                'Sinopsi' => $request->input('Sinopsi'),
                'Director' => $request->input('Director'),
            ]);

            // Retorna a la vista principal amb un missatge de confirmació
            return redirect()->route('pelicules.index')->with('success', 'Película creada amb èxit');
        }
        // Si el mètode no és POST, mostra el formulari per a crear una nova pel·lícula
        return view('crearPeli');
    }

}
