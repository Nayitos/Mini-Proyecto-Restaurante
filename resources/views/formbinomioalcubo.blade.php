<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Binomio al cubo </title>
</head>
<body>
@extends('layout')
@section('enmedio')

<h4 align="center">  Binomio al cubo</h4>
<h4 align="center">(a+b)³</h4>
<form action="binomioalcubo" method="POST">
@csrf 
<h4>Calcular el binomio al cubo si: </h4>
<h4>a= <input type="text"  name="a"  placeholder="Ingresar valor de A"> </h4>
<h4>b= <input type="text"  name="b"  placeholder="Ingresar valor de B"> </h4>


<input type="submit" value="Calcular">

</form>


@endsection
</body>
</html>