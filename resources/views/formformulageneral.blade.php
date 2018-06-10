<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formula General </title>
</head>
<body>
@extends('layout')
@section('enmedio')
<h4 align="center"> Formula General </h4>
<h4 align="center">x= -b (+ -) √b² - 4ac   / 2a</h4>



<form action="formulageneral" method="POST">
@csrf 
<h4>Introduzca a,b y c para calular la formula general</h4>
<h4>a= <input type="text"  name="a"  placeholder="Ingresar valor de A"> </h4>
<h4>b= <input type="text"  name="b"  placeholder="Ingresar valor de B"> </h4>
<h4>c= <input type="text"  name="c"  placeholder="Ingresar valor de C"> </h4>

<input type="submit" value="Calcular">
</form>
@endsection
</body>
</html>