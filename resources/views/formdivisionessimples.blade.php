<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
        
	<h1 align = "center">Operacion de Fracciones</h1>
    <form action="formdivisionessimples" method="get">
        <label>Fraccion 1 = </label><input type="text" name="a1">/<input type="text" name="b1"><br>
        <label>Fraccion 2 = </label><input type="text" name="a2">/<input type="text" name="b2"><br>
        <label>Fraccion 3 = </label><input type="text" name="a3">/<input type="text" name="b3"><br><br>

        <input type="radio" name="opera" value="1">Suma
        <input type="radio" name="opera" value="2">Resta
        <input type="radio" name="opera" value="3">Multiplicacion
        <input type="radio" name="opera" value="4">Division <br><br>
        <input type="submit" value="Calcular operacion">
</form>
<?php
if (isset($_GET['opera'])) {
        operacion($_GET['opera'],$_GET['a1'],$_GET['b1'],$_GET['a2'],$_GET['b2'],$_GET['a3'],$_GET['b3']);       
    }
    function operacion($conv,$a1,$b1,$a2,$b2,$a3,$b3){
        switch ($conv) {
    case 1:
        $paso1 = $b1*$b2*$b3;
        $paso2 = ((($paso1/$b1)*$a1)+(($paso1/$b2)*$a2)+(($paso1/$b3)*$a3));
        
        echo "Suma: ".$paso2."/".$paso1;
        break;
    case 2: 
        $paso1 = $b1*$b2*$b3;
        $paso2 = ((($paso1/$b1)*$a1)-(($paso1/$b2)*$a2)-(($paso1/$b3)*$a3));

        echo "Resta: ".$paso2."/".$paso1;
        break;
    case 3:
        $paso1 = $a1*$a2*$a3;
        $paso2 = $b1*$b2*$b3;
        echo "Multiplicacion: ".$paso1."/".$paso2;
        break;
    case 4:
        $paso1 = $a1*$b2*$b3;
        $paso2 = $b1*$a2*$a3;
        echo "Division: ".$paso1."/".$paso2;
        break;
}
    }
    ?>
</body>