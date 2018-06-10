<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teoremapitController extends Controller
{
    public function teoremaopit(Request $request)
    {
     $a = $request->a;
     $b = $request->b;
     $c =  (pow($a,2) + pow($b,2));
     return view ('pitagoras', ['a' => $a, 'b' => $b , 'c' => $c]);
        }
}
