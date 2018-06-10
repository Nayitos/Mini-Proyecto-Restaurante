<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formula General</title>
</head>
<body>

    <h1>Formula General</h1>
    <?php

   //Variables
   $x1; $x2; $a; $b; $c; 

   // Formula general
   $formula = Sqrt((pow($b,2))+((-4)*($a)*($c)));
   
   //Separacion para X1 + y X2 - 
   $x1 = (-$b) + $formula;
   $x2 = (-$b) - $formula;
  
   //Division
   $x1=($x1/(2*$a));
   $x2=($x2/(2*$a));

   echo "<br> El resultado de X1 es : " , $x1;
   echo "<br> El resultado de X2 es : ", $x2;
  
    ?>
</body>
</html>