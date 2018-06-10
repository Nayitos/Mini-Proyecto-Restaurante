<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operaciones</title>
</head>
<body>
    <h1>Ingresar datos</h1>

 <form action="formsoperaciones" method="post">
  //Etiqueta para la verison nueva de laravel
    @csrf
  //Para ingresar texto
    <input type="text" name="num1" placeholder="Número 1">

    <input type="text" name="num2" placeholder="Número 2">

    <input type="text" name="num3" placeholder="Número 3">
  //Boton de enviar datos
    <input type="submit" value="Enviar">

</form>


</body>
</html>