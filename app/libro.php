<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    //
    protected $fillable = [
        'isbn','titulo','idAutorPrimario','idAutorSecundario','idEditorial',
    ];
}
