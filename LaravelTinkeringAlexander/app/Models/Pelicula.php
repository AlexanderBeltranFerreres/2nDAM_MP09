<?php
/*
 * Made by: Alexander Beltran
 * Date: 14/03/2021
 * */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'Pelicules';

    protected $fillable = ['Titol', 'Any', 'Genere', 'Sinopsion', 'Director'];
}
