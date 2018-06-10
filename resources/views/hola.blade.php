<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nayitos</title>
</head>
<body>
    <h1>Naruto vive </h1>
<?php
$num;
$res;
for ($i=0; $i <= 9; $i++) { 
    $res  = $num * $i;
    echo "<br> Resultado es: ", $res;
   
}

$numAl = rand(1,20);
echo "<br> Numero chido ", $numAl;
?>
</body>
</html>