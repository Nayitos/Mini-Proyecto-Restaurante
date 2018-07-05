<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class editorial extends Model
{
    // 
    protected $fillable = [

        'nombre', 'direccion', 'telefono',
    ];
}
