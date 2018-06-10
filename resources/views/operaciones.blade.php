<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operaciones</title>
</head>
<body>

     <h1>Operaciones</h1>
  
     <form action="operativas" method="post">
      @csrf
     <label >A:</label> <input type = "text" name="a">
     <label >B:</label> <input type = "text" name="b">
     <input type = "submit"  value="Enviar">
     </form>  
</body>
</html>