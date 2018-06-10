<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Tabla de suma y multiplicacion </title>
</head>
<body>
@extends('layout')
@section('enmedio')
<h4 align="center"> Tabla de suma y multiplicacion </h4>

<form action="limitar" method="POST">
@csrf 
<h4>Introduzca un numero N, para calcular la tabla de sumas y multiplicaciones</h4>
<input type="text"  name="num" align="center"   placeholder="Ingresar numero">

<input type="submit" value="Enviar">
</form>
@endsection
</body>
</html>