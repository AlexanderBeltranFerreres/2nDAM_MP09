<?php
//Fitxer per gestionar les rutes
namespace Code;

use http\Exception\RuntimeException;

class Route{

    protected $routes;

    //Creem funcio per afegir a l'array
    public function register($route){
        $this->routes[] = $route;
        return $this;
    }

    //Funcio per rebre un array de rutes i assignar a la propietat rutes
    public function define($route){
        $this->routes = $route;
        return $this;
    }

    //Funcio per redirigir la url solicitada a un controlador

    public function redirect($url){
        if(!array_key_exists($url, $this->routes)){
            require '../resources/views/errors/404.php';
            return $this;
        }
        //SI no troba el controlador
        if(!file_exists($this->routes[$url])){
            throw new RuntimeException("No s'ha trobat el controldor:".$this->routes[$url]);
        }
        require $this->routes[$url];
        return $this;
    }



}