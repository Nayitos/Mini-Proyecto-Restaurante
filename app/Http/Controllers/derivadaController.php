<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class derivadaController extends Controller
{
    public function derivada(Request $request)
    {
     $a = $request->a;
     $b = $request->b;

     $calc = $a * $b; 
     $exp = $b -1;
    
     return view ('derivada', ['a' => $a, 'b' => $b, 'calc'=> $calc, 'exp' => $exp]);
     
        }
}
