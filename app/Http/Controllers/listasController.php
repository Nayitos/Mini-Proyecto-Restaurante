<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listasController extends Controller
{
   
    public function  listadenums(Request $request)
    {
     $num = $request->num;

     return view ('listas', ['num' => $num]);
        }
}
