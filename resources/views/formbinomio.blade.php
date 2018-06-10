<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Binomio cuadrado perfecto </title>
</head>
<body>

@extends('layout')
@section('enmedio')
<h4 align="center" > Binomio cuadrado perfecto </h4>
<h4 align="center"> (a² + b²) </h4>
<form action="binomiocuadrado" method="POST">
@csrf 
<h4>Calcular el Binomio Cuadrado perfecto si:</h4>
<h4>a= <input type="text"  name="a"  placeholder="Ingresar valor de A"> </h4>
<h4>b= <input type="text"  name="b"  placeholder="Ingresar valor de B"> </h4>

<input type="submit" value="Calcular">
</form>
@endsection
</body>
</html>