<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //Datos que se podrán editar en la BD
    protected $fillable = [

        'idPedido',
    ];
}
