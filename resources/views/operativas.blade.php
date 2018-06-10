<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operaciones Aritmenticas Básicas</title>
</head>
<body>
    <h2>Operaciones Aritmenticas Básicas </h2>

<?php
//Variables 
$num1; 
$num2; 
$sum; 
$rest; 
$mult;
$div;

//Formula de suma
$sum = $num1 + $num2;
echo '<br> La suma de ' , $num1 , " y " , $num2 , " es : ",$sum;
//Formula de resta
$rest = $num1 - $num2;
echo '<br> La resta de ' , $num1 , " y " , $num2 , " es : ",$rest;
//Formula de multiplicacion
$mult = $num1 * $num2;
echo '<br> La multiplicación de ' , $num1 , " y " , $num2 , " es : ",$mult;
//Formula de división
$div = $num1 / $num2;
echo '<br> La división de ' , $num1 , " y " , $num2 , " es : ",$div;


?>
</body>
</html>