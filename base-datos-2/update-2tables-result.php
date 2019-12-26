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
$connection = mysqli_connect("remotemysql.com", "DhtgyEX80h", "SwtCcW3FT3", "DhtgyEX80h") or
die("Problemas con la conexión");

$registros = mysqli_query($connection, "update alumnos
                                           set codigocurso=$_REQUEST[codigocurso],
                                               nombre='$_REQUEST[nombre]',mail='$_REQUEST[mail]'
                                           where codigo=$_REQUEST[codigo]") or
die("Problemas en el select:" . mysqli_error($connection));
echo "El curso fue modificado con exito";
?>
</body>
</html>