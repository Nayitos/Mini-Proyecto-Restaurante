<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario </title>
</head>
<body>
<h1> Formula general </h1>

<form action="teoremaop" method="POST">
@csrf 
<input type="text" name="a"  placeholder="Ingresar numero 1">
<input type="text" name="b"  placeholder="Ingresar numero 2">
<input type="text" name="c"  placeholder="Ingresar numero 3">

<input type="submit" value="Enviar">
</form>

</body>
</html>