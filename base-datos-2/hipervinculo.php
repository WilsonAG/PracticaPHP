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

  $registros = mysqli_query($connection, "select codigo,nombrecurso from cursos") or
    die("Problemas en el select:" . mysqli_error($connection));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre del curso:<a href=\"hipervinculo-result.php?codigo=$reg[codigo]\">" . $reg['nombrecurso'] . "</a><br>";
    echo "<hr>";
  }

  mysqli_close($connection);
  ?>

</body>
</html>