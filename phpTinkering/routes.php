<?php
//definim les rutes
return [
    '/' => 'App/Controllers/FilmController@index',
    '/index.php' => 'App/Controllers/FilmController@index',
    '/index' => 'App/Controllers/FilmController@index',
    '/home' => 'App/Controllers/FilmController@index',
    '/films' => 'App/Controllers/FilmController@films', // Pàgina de pel·lícules
    '/info_films' => 'App/Controllers/FilmController@info_films', // Pàgina mes info
    '/create' => 'App/Controllers/FilmController@create',
    '/store' => 'App/Controllers/FilmController@store',
    '/edit' => 'App/Controllers/FilmController@edit',
    '/update' => 'App/Controllers/FilmController@update',
    '/delete' => 'App/Controllers/FilmController@delete',
    '/destroy' => 'App/Controllers/FilmController@destroy',

    // Rutes per a F1
    '/f1_drivers' => 'App/Controllers/F1Controller@f1Drivers', // Pàgina de conductors de F1
    '/info_f1Driver' => 'App/Controllers/F1Controller@info_f1Driver', // Pàgina amb més info d'un conductor
    '/create_f1Driver' => 'App/Controllers/F1Controller@create_f1Driver', // Vista per crear conductor de F1
    '/store_f1Drivers' => 'App/Controllers/F1Controller@store_f1Drivers', // Emmagatzemar nou conductor
    '/edit_f1Driver' => 'App/Controllers/F1Controller@edit_f1Driver', // Vista per editar conductor
    '/update_f1Driver' => 'App/Controllers/F1Controller@update_f1Driver', // Actualitzar conductor
    '/delete_f1Driver' => 'App/Controllers/F1Controller@delete_f1Driver', // Vista per eliminar conductor
    '/destroy_f1Driver' => 'App/Controllers/F1Controller@destroy_f1Driver', // Eliminar conductor
];