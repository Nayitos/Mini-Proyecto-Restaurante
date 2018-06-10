<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conversiones de divisas</title>
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
        
	<h1 align ="center">Conversion de divisas</h1>
    <form action="formconversiones" method="get">
        <select name="conv" id="sel">
            <option value="1">Euros</option>
            <option value="2">Libras</option>
            <option value="3">Yen</option>
            <option value="4">Yuan</option>
            <option value="5">Rublo</option>
        </select>
        <input type="text" id="input1" name="a">
<button type="submit" value="conv">Conversion</button>
</form>
<?php
if (isset($_GET['conv'])) {
        operacion($_GET['conv'],$_GET['a']);       
    }
    function operacion($conv,$a){
        switch ($conv) {
    case 1:
        $result = $a*0.84726;
        echo "Euros: ".$result;
        break;
    case 2: 
        $result = $a*0.74021;
        echo "Libras: ".$result;
        break;
    case 3:
        $result = $a*110.45;
        echo "Yen: ".$result;
        break;
    case 4:
        $result = $a*6.3662;
        echo "Yuan: ".$result;
        break;
    case 5:
        $result = $a*61.896;
        echo "Rublo: ".$result;
        break;
}
    }
    ?>
</body>
</html>