<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mayo09Controller extends Controller
{
    
public function mayo09(Request $request)
{
 $nombre = $request->nombre;
 $edad = $request->edad;
 $edad1 = 2018 - $edad;
return view ('mayo09res',['nombre' => $nombre,'nacimiento' => $edad1]);
    }
}
