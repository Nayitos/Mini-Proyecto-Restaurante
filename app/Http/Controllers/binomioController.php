<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class binomioController extends Controller
{
    public function binomiocuadrado(Request $request)
    {
     $a = $request->a;
     $b = $request->b;
     $suma = (pow($a,2) + pow($b,2) + (($a*$b)*2));
    
     return view ('binomio', ['a' => $a, 'b' => $b, 'suma'=> $suma]);
     
        }
}
