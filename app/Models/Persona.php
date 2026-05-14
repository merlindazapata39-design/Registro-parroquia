<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'ci', 
        'nombres', 
        'apellidos', 
        'edad', 
        'genero', 
        'fecha_nacimiento', 
        'lugar_nacimiento', 
        'nombre_padre', 
        'nombre_madre'
    ];
}
