<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regal extends Model
{
    use HasFactory;

    protected $table = 'Regals';
    protected $fillable = ['nom', 'edad', 'solicitud', 'comportament', 'address'];
    public $timestamps = false;


}
