<?php

namespace App\Controllers;
use App\Models\F1_Driver;

class F1Controller
{
    //funcio per anar a la vista del main
    public function index()
    {
        return view('films/index');
    }

    //funcio f1Drivers
    public function f1Drivers()
    {
        //obtenim tots els conductors
        $f1Drivers = F1_Driver::getAllF1();

        //pasem les pelis a la vista
        return view('f1Drivers/f1Drivers', ['f1Drivers' => $f1Drivers]);
    }

    //funcio per anar a la vista de informacio dels Conductorts
    public function info_f1Driver($id)
    {
        if($id!=null){
            $f1Driver = F1_Driver::findF1($id);
            return view('f1Drivers/info_f1Driver', ['f1Driver' => $f1Driver]);
        }else{
            return view('/');
        }
    }

    //funcio per anar a la vista create
    public function create_f1Driver()
    {
        return view('f1Drivers/create_f1Driver');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store_f1Drivers($data)
    {
        //cridem funcio create del model
        F1_Driver::createF1($data);
        //retornar a la vista principal
        header('location: /');
        exit;
    }

    //funcio per a la vista edit
    public function edit_f1Driver($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /');
            exit;
        }

        //busquem el conductor
        $f1Driver = F1_Driver::findF1($id);

        //si no ens passen cap conductor mostrar 404
        if (!$f1Driver) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem al conductor indicat
        return view('f1Drivers/edit_f1Driver', ['f1Driver' => $f1Driver]);
    }

    //funcio update per a modificar el conductor a la base de dades
    public function update_f1Driver($id, $data)
    {
        //modifiquem
        F1_Driver::updateF1($id, $data);

        //retonem a la pàgina principal
        header('location: /');
        exit;
    }

    //funcio per anar a la vista delete
    public function delete_f1Driver($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /');
            exit;
        }

        //busquem el pilot
        $f1Driver = F1_Driver::findF1($id);
        //retornem la vista
        return view('f1Drivers/delete_f1Driver', ['f1Driver' => $f1Driver]);

    }

    //funcio per eliminar conductor de la base de dades
    public function destroy_f1Driver($id)
    {
        //utilizem la funcio delete del model
        F1_Driver::deleteF1($id);

        //retornar a la vista
        header('location: /');
    }
}