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
                'Sinopsis' => 'nullable|string',
                'Director' => 'required|string|max:255',
            ]);

            // Crea un nou registre a la taula Pelicules
            Pelicula::create([
                'Titol' => $request->input('Titol'),
                'Any' => $request->input('Any'),
                'Genere' => $request->input('Genere'),
                'Sinopsis' => $request->input('Sinopsis'),
                'Director' => $request->input('Director'),
            ]);

            // Retorna a la vista principal amb un missatge de confirmació
            return redirect()->route('pelicules.index')->with('success', 'Película creada amb èxit');
        }
        // Si el mètode no és POST, mostra el formulari per a crear una nova pel·lícula
        return view('crearPeli');
    }

    public function editPeli(Request $request, $id)
    {
        $pelicula = Pelicula::findOrFail($id);

        // Si el mètode és GET, mostra el formulari amb lo de BD
        if ($request->isMethod('get')) {
            return view('editarPeli', ['pelicula' => $pelicula]);
        }

        // Si el mètode és PUT, valida i actualitza les dades
        if ($request->isMethod('put')) {
            $request->validate([
                'Titol' => 'required|string|max:255',
                'Any' => 'required|integer',
                'Genere' => 'required|string|max:255',
                'Sinopsis' => 'nullable|string',
                'Director' => 'required|string|max:255',
            ]);

            // Actualitza els camps amb les dades del formulari
            $pelicula->update([
                'Titol' => $request->input('Titol'),
                'Any' => $request->input('Any'),
                'Genere' => $request->input('Genere'),
                'Sinopsis' => $request->input('Sinopsis'),
                'Director' => $request->input('Director'),
            ]);
            // Redirigeix a la llista de pel·lícules amb un missatge d'èxit
            return redirect()->route('pelicules.index')->with('success', 'Pel·lícula modificada amb èxit!');
        }
        // Si no es compleixen les condicions, retorna un error
        abort(405, 'La manera de fer la petició no és correcta');
    }

}
