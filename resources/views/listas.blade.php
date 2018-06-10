<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de numeros</title>
</head>
<body>
<h1> Lista de numeros </h1>    
<?php
//Variables
$num;

//Ciclo para limitar el número de impresiones en < 50
if($num <=50 && $num>0){
    $cont=0;
    while ($num != $cont) {
        $cont++;
        for ($i=0; $i < $cont ; $i++) { 
            echo  $cont.","; } } }
            
//Condión de que el número que se ingrese a la URL sea mayor a 50 no haga nada
else {
    echo "Número muy grande";
}
?>



</body>
</html>