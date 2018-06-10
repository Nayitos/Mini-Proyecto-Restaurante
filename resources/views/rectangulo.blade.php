<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangulo</title>
</head>
<body>
    <h2>Rectangulo</h2>
    <?php
    //Variables
        $base; $altura; $area; $perimetro;
    //Formulas
        $area = ($base * $altura);
        $perimetro = ($base + $altura)*2;

        echo "Base: ",$base;
        echo "<br><br>Altura: ",$altura;
        echo "<br><br>El area del rectangulo es: ",$area;
        echo "<br><br>El perimetro del rectangulo es: ",$perimetro;
    ?>
</body>
</html>