<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $fillable=[
        'titulo',
        'director',
        'genero',
        'sinopsis',
        'fecha_estreno',
        'duracion_min',
        'clasificacion'
    ];
}
