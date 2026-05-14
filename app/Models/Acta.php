<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    protected $fillable = [
        'nro_serie', 
        'nro_libro', 
        'nro_pagina', 
        'nro_certificado', 
        'fecha_registro', 
        'observaciones', 
        'sacerdote_id'
    ];
}
