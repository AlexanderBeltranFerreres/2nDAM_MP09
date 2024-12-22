<?php

namespace App\Http\Controllers;
use App\Models\Regal;
use Illuminate\Http\Request;

class RegalsController extends Controller
{
    public function getAll() {
        $regals = Regal::all();
        return view('regals', ['regals' => $regals]);
    }

    public function createRegal(Request $request) {
        // Si el mètode és POST, valida les dades rebudes del formulari
        if ($request->isMethod('post')) {
            $request->validate([
                'nom' => 'required|string|max:255',
                'edad' => 'required|integer',
                'comportament' => 'required|string|max:255',
                'solicitud' => 'nullable|string',
                'address' => 'required|string|max:255',
            ]);

            // Crea un nou registre a la taula Pelicules
            Regal::create([
                'nom' => $request->input('nom'),
                'edad' => $request->input('edad'),
                'comportament' => $request->input('comportament'),
                'solicitud' => $request->input('solicitud', 'NO ESPECIFICAT'),
                'address' => $request->input('address'),
            ]);

            // Retorna a la vista principal amb un missatge de confirmació
            return redirect()->route('regals.index')->with('success', 'Solicitud creada amb èxit');
        }
        // Si el mètode no és POST, mostra el formulari per a crear una nova solicitud
        return view('crearRegal');
    }

    public function editRegal(Request $request, $id)
    {
        $regal = Regal::findOrFail($id);

        // Si el mètode és GET, mostra el formulari amb lo de BD
        if ($request->isMethod('get')) {
            return view('modificarRegal', ['regal' => $regal]);
        }

        // Si el mètode és PUT, valida i actualitza les dades
        if ($request->isMethod('put')) {
            $request->validate([
                'nom' => 'required|string|max:255',
                'edad' => 'required|integer',
                'comportament' => 'required|string|max:255',
                'solicitud' => 'nullable|string',
                'address' => 'required|string|max:255',
            ]);

            // Actualitza els camps amb les dades del formulari
            $regal->update([
                'nom' => $request->input('nom'),
                'edad' => $request->input('edad'),
                'comportament' => $request->input('comportament'),
                'solicitud' => $request->input('solicitud', 'NO ESPECIFICAT'),
                'address' => $request->input('address'),
            ]);
            // Redirigeix a la llista de pel·lícules amb un missatge d'èxit
            return redirect()->route('regals.index')->with('success', 'Sol·licitud modificada amb èxit!');
        }
        // Si no es compleixen les condicions, retorna un error
        abort(405, 'La manera de fer la petició no és correcta');
    }

    public function destroy($id)
    {
        $regal = Regal::findOrFail($id);
        $regal->delete();

        return redirect()->route('regals.index')->with('success', 'Sol·licitud eliminada amb èxit');
    }

    public function listRegal(Request $request, $id)
    {
        $regal = Regal::findOrFail($id);

        // Si el mètode és GET, mostra el formulari amb lo de BD
        if ($request->isMethod('get')) {
            return view('veureRegal', ['regal' => $regal]);
        }
        // Si no es compleixen les condicions, retorna un error
        abort(405, 'La manera de fer la petició no és correcta');
    }
}
