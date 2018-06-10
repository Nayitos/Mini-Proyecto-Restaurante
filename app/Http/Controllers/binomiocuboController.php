<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class binomiocuboController extends Controller
{
    public function binomioalcubo(Request $request)
    {
     $a = $request->a;
     $b = $request->b;

     $suma = (pow($a,3) + pow($b,3) + ((pow($a,2)*$b)*3) + ((pow($b,2)*$a)*3));
    
     return view ('binomio', ['a' => $a, 'b' => $b, 'suma'=> $suma]);
     
        }
}
