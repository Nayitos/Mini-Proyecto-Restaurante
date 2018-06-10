<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operacionesController extends Controller
{
    
    public function operaciones(Request $request)
    {
//Variables que se parsean a request (Ingresadas)
$num1 = $request ->num1;
$num2 = $request ->num2;
$num3 = $request ->num3;

//Operaciones 
//Operaciones Aritmeticas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$div = $num1/$num2;
$multi = $num1 * $num2;

//Formula general 
$formula = Sqrt((pow($num2,2))+((-4)*($num1)*($num3)));

//Separacion para X1 + y X2 - 
$x1 = (-$num2) + $formula;
$x2 = (-$num2) - $formula;

//Division para encontrar x1 + y x2-
$x1=($x1/(2*$num1));
$x2=($x2/(2*$num1));


//Area y perimetro 
$area = $num1 * $num2;
$perimetro = $num1 + $num2 * 2;

//Teorema
$hipotenusa =  sqrt (pow($num1,2) + pow($num2,2));

//Se coloca primero a donde se manda y se asigan las variables correspondientes (Deben ser las mismas)
//Que se declaran en los placeholders 
return view('formnumsres',['suma'=>$suma, 'resta' => $resta , 'div' => $div, 
'multi' => $multi, 'formula'=> $formula, 'x1' => $x1 , 'x2' => $x2 , 'area' => $area,
'perimetro'=> $perimetro , 'hipotenusa' => $hipotenusa]);
    }
}
