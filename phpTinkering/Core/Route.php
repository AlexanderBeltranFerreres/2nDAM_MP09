<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($url)
    {
        //partim la url
        $parts = explode('/', trim($url,'/'));
        //indiquem ruta del controlador
        $controller = 'App\Controllers\FilmController';

        //Inici
        if ($url === '/') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->index();
        }

        //films
        if ($parts[0] === 'films') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->films();
        }
        //Info de pelicules
        if ($parts[0] === 'info_films' && isset($parts[1])) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->info_films($parts[1]);
        }

        //create
        if($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->create();
        }

        //Utilitzant POST guardem
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }


        //delete en GET  mirem que sigue delete en la id
        if($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->delete($parts[1]);
        }


        //destroy en POST
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }


        //edit en GET
        if($parts[0] === 'edit' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->edit($parts[1]);
        }

        //Actualitzar en POST
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }

        //partim la url
        $parts = explode('/', trim($url,'/'));
        //indiquem ruta del controlador
        $controller = 'App\Controllers\F1Controller';

        //Inici
        if ($url === '/') {
            require '../App/Controllers/F1Controller.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->index();
        }

        //f1Drivers
        if ($parts[0] === 'f1Drivers') {
            require '../App/Controllers/F1Controller.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->f1Drivers();
        }
        //Info de Conductors
        if ($parts[0] === 'info_f1Driver' && isset($parts[1])) {
            require '../App/Controllers/F1Controller.php';
            $controllerInstance = new $controller();
            return $controllerInstance->info_f1Driver($parts[1]);
        }

        //create
        if($parts[0] === 'create_f1Driver') {
            require '../App/Controllers/F1Controller.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->create_f1Driver();
        }

        //Utilitzant POST guardem
        if ($parts[0] === 'store_f1Drivers' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/F1Controller.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store_f1Drivers($data);
        }


        //delete en GET  mirem que sigue delete en la id
        if($parts[0] === 'delete_f1Driver' && $parts[1]) {
            require '../App/Controllers/F1Controller.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->delete_f1Driver($parts[1]);
        }


        //destroy en POST
        if ($parts[0] === 'destroy_f1Driver' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/F1Controller.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy_f1driver($_POST['id']);
        }


        //edit en GET
        if($parts[0] === 'edit_f1Driver' && $parts[1]) {
            require '../App/Controllers/F1Controller.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->edit_f1Driver($parts[1]);
        }

        //Actualitzar en POST
        if ($parts[0] === 'update_f1Driver' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/F1Controller.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update_f1Driver($_POST['id'], $data);
        }

        //si no es cap dels anteriors retornem la vista 404
        return require '../resources/views/errors/404.blade.php';

    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirectF1($url)
    {


        //si no es cap dels anteriors retornem la vista 404
        return require '../resources/views/errors/404.blade.php';

    }

}