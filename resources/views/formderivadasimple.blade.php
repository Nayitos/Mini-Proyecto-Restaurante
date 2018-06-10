<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Derivada simple</title>
</head>
<body>
@extends('layout')
@section('enmedio')
<h4 align="center">Derivada simple</h4>
<h4>f(x)= u^k su derivada es</h4>
<h4>f(x)= k * u^k-¹</h4>

<h4>Ejemplo f(x)=2x³, su derivada es</h4>
<h4>f(x)= 2(3 * x³-¹)=6x²</h4>


<form action="derivada" method="POST">
@csrf 
<h4>Introduzca los datos para calcular derivada </h4>
<h5>a= <input type="text"  name="a"  placeholder="Coeficiente"> </h5>
<h5>b= <input type="text"  name="b"  placeholder="Exponente"> </h5>

<input type="submit" value="Calcular">
</form>
@endsection
</body>
</html>