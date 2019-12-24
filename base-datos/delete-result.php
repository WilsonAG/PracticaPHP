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
  
    $registros = mysqli_query($connection, "select codigo from cursos
                          where nombrecurso='$_REQUEST[nombrecurso]'") or
      die("Problemas en el select:" . mysqli_error($connection));
    if ($reg = mysqli_fetch_array($registros)) {
      mysqli_query($connection, "delete from cursos where nombrecurso='$_REQUEST[nombrecurso]'") or
        die("Problemas en el select:" . mysqli_error($connection));
      echo "Se efectuó el borrado del curso ingresado.";
    } else {
      echo "No existe un curso con dicho nombre.";
    }
    mysqli_close($connection);
    ?>
</body>
</html>