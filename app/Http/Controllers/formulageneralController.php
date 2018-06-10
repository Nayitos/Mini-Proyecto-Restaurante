<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formulageneralController extends Controller
{
    public function formulageneral(Request $request)
    {
     $a = $request->a;
     $b = $request->b;
     $c = $request->c;
     $n = -1;
   
    $paso1 = sqrt(pow($b,2)-(4*($a*$c)));
	$paso2 = 2*$a;
	$x = (($n*$b)+$paso1)/$paso2;
	$y = (($n*$b)-$paso1)/$paso2;
    
     return view ('formulageneral', ['a' => $a, 'b' => $b, 'c'=> $c,'x'=> $x , 'y' => $y ]);
     
        }
}
