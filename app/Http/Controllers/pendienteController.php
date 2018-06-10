<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendienteController extends Controller
{
    public function pendiente(Request $request)
    {
     $a = $request->a;
     $b = $request->b;
     $a1 = $request->a1;
     $b1 = $request->b1;

     $calc = $b1 - $b / $a1 - $a; 

     return view ('pendiente', ['a' => $a, 'b' => $b, 'a1' => $a1 , 'b1' => $b1 , 'calc' => $calc ]);
        }
}
