<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="insert-select-result.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br>
    Ingrese mail:
    <input type="text" name="mail"><br>
    Seleccione el curso:<br>
    <?php
  $conexion = mysqli_connect("remotemysql.com", "DhtgyEX80h", "SwtCcW3FT3", "DhtgyEX80h") or
  die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo,nombrecurso from cursos") or
      die("Problemas en el select:" . mysql_error());
    while ($reg = mysqli_fetch_array($registros)) {
      echo "<input type=\"radio\" name=\"radio1\" value=\"$reg[codigo]\">" . $reg['nombrecurso'] . "<br>";
    }
    ?>
    <input type="submit" value="Registrar">
  </form>
</body>
</html>