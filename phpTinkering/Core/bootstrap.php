<?php
//bootstrap es responsable de configurae i inicialitzar l'entorn de l'aplicació.
//carregar kes conbfiguracions, inicialitzar dependències com la base de dades

use Code\Route;
use Core\App;
use Dotenv\Dotenv; //Carregar var de l'entorn
use Core\Database\Connection; //fer connexions
use Core\Database\Database; //operacions de database

//Carreguem les rutes
$routes = require '../routes.php';

//Carreguem les variables d'entorn de forma inmutable

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load(); //Carreguem var

//Enllaém l'arxu config al contenidor com a config on tenim les variables

App::bind('config', require '../config.php');

//enllaém l'arxiu config
App::bind('data', new Database(
    Connection::make(App::get('config')['database'])
));

//Enllaçem instància
App::bind('routes', (new Route())->define(routes));