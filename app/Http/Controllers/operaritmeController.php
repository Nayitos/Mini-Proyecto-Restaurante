<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operaritmeController extends Controller
{
    public function operaritme(Request $request)
    {
     $num = $request->num1;
     $num2 = $request->num2;
     return view ('operativas', ['num1' => $num, 'num2' => $num2  ]);
        }
}
