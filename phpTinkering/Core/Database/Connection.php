<?php
 //Fitxer crear la connexió a la base de dades

namespace Core\Database;

use PDO;
use PDOException;

//classe PDO; //Importem classe PDO
class Connection{
    public static function make($config) {
        try{
            return new PDO(
                $config['databasetype'] . ':host=' . $config['host'] .
                ';dbname=' . $config['name'] , $config['user'] , $config['password']
            );
        } catch (\Exception $e) {
                echo 'Errpr de connexió a la base de dades.';
                echo 'Error: ' . $e->getMessage();
        }
    }
}