<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario </title>
</head>
<body>
<h1> Formulario </h1>

<form action="operaritme" method="POST">
@csrf 
<input type="text" name="num1"  placeholder="Ingresar numero 1">
<input type="text" name="num2" placeholder="Ingresar numero 2">
<input type="submit" value="Enviar">
</form>

</body>
</html>