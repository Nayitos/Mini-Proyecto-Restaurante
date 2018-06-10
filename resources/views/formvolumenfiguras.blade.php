<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Volumen de figuras</title>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $("#sel").change(function() {
        var selected_option = $('#sel').val();
        if(selected_option == '1')
        {
            $('#input1').show();
            $('#input2').hide();
        }
        else
        {
            $('#input1').show();
            $('#input2').show();
        }
    })
});
</script>
</head>
<body>
    <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .topnav {
          overflow: hidden;
          background-color: #333;
        }
        
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .topnav a.active {
          background-color: #3399ff;
          color: white;
        }
        </style>

        <div class="topnav">
            <a class="active" href="/home">Regresar por más ejercicios</a>
          </div>

	<h1 align="center">Volumen de Figuras</h1>
    <form action="formvolumenfiguras" method="get">
        <select name="formas" id="sel">
            <option value="1">Cubo</option>
            <option value="2">Prisma Rectangular</option>
            <option value="3">Piramide</option>
            <option value="4">Esfera</option>
            <option value="5">Cono</option>
        </select>
        <input type="text" id="input1" name="a">
        <input type="text" id="input2" name="b">
<button type="submit" value="formas">Calcular</button>
</form>
<?php

if (isset($_GET['formas'])) {
        operacion($_GET['formas'],$_GET['a'],$_GET['b']);       
    }
    function operacion($formas,$a,$b){
        switch ($formas) {
            case 1:
                $volumen = pow($a,3);
                echo "volumen de cubo: ".$volumen;
                break;
            case 2:
            $volumen = ($a * $b);
                echo "volumen de Prisma Rectangular: " .$volumen;
                break;
            case 3:
            $volumen = (1/2) * ($a * $b);
                echo "volumen de Piramide".$volumen;
                break;
            case 4:
            $volumen = (4/3)* (3.1416 * (pow($a,3)));
                echo "volumen de Esfera" .$volumen;
                break;
            case 5:
            $volumen = (1/3)* (3.1416 * (pow($a,2)) * $b);
                echo "volumen de Cono" .$volumen;
                break;
        }
    }
    ?>
    
</body>
</html>