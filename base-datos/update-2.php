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

  $registros = mysqli_query($conexion, "select * from cursos
                        where codigo=$_REQUEST[codigo]") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="update-3.php" method="post">
      Ingrese el nuevo nombre del curso:
      <input type="text" name="nombrecurso" value="<?php echo $reg['nombrecurso'] ?>">
      <input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ?>">
      <br>
      <input type="submit" value="Modificar">
    </form>

  <?php
  } else
    echo "No existe un curso con dicho codigo";
  ?>
</body>
</html>