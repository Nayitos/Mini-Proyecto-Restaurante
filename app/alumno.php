<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{

    protected $fillable = [

        'noControl','nombre','apellidoPaterno','apellidoMaterno','direccion','telefono',
        
    ];
    
}
