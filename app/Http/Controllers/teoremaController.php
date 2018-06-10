<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teoremaController extends Controller
{
    public function teoremaop(Request $request)
    {
     $a = $request->a;
     $b = $request->b;
     $c = $request ->c;
     return view ('formulagen', ['a' => $a, 'b' => $b, 'c' => $c ]);
        }
}

