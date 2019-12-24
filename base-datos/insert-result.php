<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
 
 $conexion = mysqli_connect("remotemysql.com", "DhtgyEX80h", "SwtCcW3FT3", "DhtgyEX80h") or
   die("Problemas con la conexión");

 mysqli_query($conexion, "insert into cursos(nombrecurso) values ('$_REQUEST[nombrecurso]')") or
   die("Problemas en el select" . mysqli_error($conexion));

 mysqli_close($conexion);

 echo "El curso fue dado de alta.";
 

?>
    
</body>
</html>