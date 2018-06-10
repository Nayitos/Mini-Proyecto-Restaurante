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

<form action="mayo09" method="POST">
@csrf 
<input type="text" name="nombre" placeholder="Ingresar nombre">
<input type="text" name="edad" placeholder="Ingresar edad">
<input type="submit" value="Enviar">

</form>

</body>
</html>