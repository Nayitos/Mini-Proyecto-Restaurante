<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendiente de la recta </title>
</head>
<body>
@extends('layout')
@section('enmedio')
<h4 align="center"> Pendiente de la recta </h4>
<h4 align="center" > m = Y2-Y1 / X2-X1</h2>
<form action="pendiente" method="POST">
@csrf 
<h4>Introduzca los puntos para calcular la pendiente:</h4>
<h4>P1(X1,Y1) = <input type="text"  name="a"  placeholder="X1"> <input type="text"  name="b"  placeholder="Y1"> </h4>
<h4>P2(X2,Y2) = <input type="text"  name="a1" placeholder="X2"> <input type="text"  name="b1" placeholder="Y2"></h4>

<input type="submit" value="Calcular">

</form>
@endsection
</body>
</html>