<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class limitnumController extends Controller
{
    public function limitnumberlist(Request $request)
    {
     $num = $request->num;
     return view ('tablas', ['num' => $num]);
        }
}
