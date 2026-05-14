<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sacerdote extends Model
{
    protected $fillable = [
        'nombre', 
        'cargo'
    ];
}
