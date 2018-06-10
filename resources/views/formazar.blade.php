<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de numeros </title>
</head>
<body>
<h1> Lista de numeros </h1>

<form action="listadenums" method="POST">
@csrf 
<input type="text" name="num"  placeholder="Ingresar numero">

<input type="submit" value="Enviar">
</form>

</body>
</html>