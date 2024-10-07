<?php

namespace Code\Database;

use PDO;

class Database{
    protected $pdo;

    //Creem contructor trn una instancia pedo per realtzar consultes
    public function __construct(){
        this->pdo = $pdo;
    }
    //Creem funcio per agafar registre d'una taula de la base de dades

    public function selectAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}