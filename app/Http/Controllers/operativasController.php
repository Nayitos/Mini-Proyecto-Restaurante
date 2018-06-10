<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operativasController extends Controller
{
    public function suma(Request $request)
    {
        $num = $request  ->a;
        $num2 = $request ->b;

        return view("operativas",['num'=> $num, 'num2'=> $num2]);
      
    }
}
