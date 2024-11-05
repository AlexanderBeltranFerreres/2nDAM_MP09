<?php

namespace App\Models;
use Core\App;
class F1_Driver
{
    protected static $table = 'f1_drivers';

    //funcio per a que torne totes les pelis
    public static function getAllF1()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a buscar una conductor
    public static function findF1($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    //funcio create
    public static function createF1($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO '. static::$table . "(driver_name, team_name, nationality, championships_won, debut_year) VALUES (:driver_name, :team_name, :nationality, :championships_won, :debut_year)");
        $statement->bindValue(':driver_name', $data['driver_name']);
        $statement->bindValue(':team_name', $data['team_name']);
        $statement->bindValue(':nationality', $data['nationality']);
        $statement->bindValue(':championships_won', $data['championships_won']);
        $statement->bindValue(':debut_year', $data['debut_year']);
        $statement->execute();
    }

    //funcio update
    public static function updateF1($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE ". static::$table . " SET driver_name = :driver_name, team_name = :team_name, nationality = :nationality,
                                                                    championships_won = :championships_won, debut_year = :debut_year WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':driver_name', $data['driver_name']);
        $statement->bindValue(':team_name', $data['team_name']);
        $statement->bindValue(':nationality', $data['nationality']);
        $statement->bindValue(':championships_won', $data['championships_won']);
        $statement->bindValue(':debut_year', $data['debut_year']);
        $statement->execute();
    }

    //funcio delete
    public static function deleteF1($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM '. static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

}