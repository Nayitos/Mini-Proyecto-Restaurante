<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    //
    protected $fillable = [

        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
    ];

}
