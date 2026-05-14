<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bautismo extends Model
{
    protected $fillable = [
        'acta_id', 
        'persona_id', 
        'fecha_bautizo', 
        'lugar_bautizo', 
        'padrino', 'madrina'
    ];
}
