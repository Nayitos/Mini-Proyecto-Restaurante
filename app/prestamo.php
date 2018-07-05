<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    //
    protected $fillable = [

        'idLibro','idAlumno','idUser','fechaPrestamo','fechaEntrega',
        
    ];

}
