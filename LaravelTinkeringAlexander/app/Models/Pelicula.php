<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'Pelicules';

    protected $fillable = ['Titol', 'Any', 'Genere', 'Sinopsion', 'Director'];

    public static function create(array $array)
    {
        return self::create([
            'Titol' => $data['Titol'],
            'Any' => $data['Any'],
            'Genere' => $data['Genere'],
            'Sinopsi' => $data['Sinopsi'],
            'Director' => $data['Director'],
        ]);
    }


}
