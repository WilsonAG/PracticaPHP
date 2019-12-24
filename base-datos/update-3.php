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

    mysqli_query($conexion, "update cursos
                          set nombrecurso='$_REQUEST[nombrecurso]' 
                        where codigo=$_REQUEST[codigo]") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se modificó el nombre del curso";
    ?>
</body>
</html>