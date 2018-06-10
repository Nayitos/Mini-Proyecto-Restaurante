<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de multiplicar</title>
</head>
<body>
@extends('layout')
@section('enmedio')
    <h4 align="center"> Tabla de suma y multiplicar </h4>

    <?php 
    //Variables
      $num; 
    
      //Tabla de suma   
    if($num>=1){ 
    $cont=0; 
    echo "<h4>Tabla de Suma</h4>";
    echo "<table>
    <tr class='tabla'>"; 
    for ($i=0; $i <=$num ; $i++) { 
        if($i==0){
            echo "<th>+</th>"; 
        }else {
              echo "<th>".$i."</th>"; 
        }
      
    }
    echo "</tr>"; 
    for ($i=1; $i <=$num ; $i++) { 
        echo "<tr>";
        echo "<td>".$i."</td>"; 
        $cont++; 
     

        for ($a=0; $a <$num ; $a++) {
            echo "<td>".($i+$cont)."</td>";


            $cont++;
        }
        $cont=0;
        echo "</tr>"; 

    }
    echo "</table> <br>";

 // Tabla de multiplicar
    $cont2=0;
    echo "<h4>Tabla de Multiplicar</h4>";
    echo "<table>
    <tr class='tabla'>";
    
        for ($i=0; $i <=$num ; $i++) { 
        if($i==0){
            echo "<th>X</th>";
        }else {
              echo "<th >".$i."</th>";
        }
       
    }
    echo "</tr>";

    for ($i=1; $i <=$num ; $i++) { 
        echo "<tr>";
    
        echo "<td>".$i."</td>";
        $cont2++;
    
        for ($a=0; $a <$num ; $a++) { 
            
            echo "<td>".($i*$cont2)."</td>";     
            $cont2++;
        }
        $cont2=0;
        echo "</tr>";
    }
    
    echo "</table> <br>";
}
else {
    echo "Tu numero es Menor, debe ser mayor a ".$num;
}
?>
</body>
@endsection
</html>