<?php

use Core\App;

require '../vendor/autoload.php';

//Carreguem bootstrap
require '../Core/bootstrap.php';

//gestiona les rutes del projecte i l'enrutador busca la ruta a config

App::get('router')->redirect($_SERVER['REQUEST_URI']);