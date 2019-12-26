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

$registros = mysqli_query($connection, "select * from alumnos
                        where codigo=$_REQUEST[codigo]") or
die("Problemas en el select:" . mysqli_error($connection));
if ($regalu = mysqli_fetch_array($registros)) {
    ?>

    <form action="update-2tables-result.php" method="post">
      Nombre: <input type="text" name="nombre" value="<?php echo $regalu['nombre'] ?>"><br>
      Mail: <input type="text" name="mail" value="<?php echo $regalu['mail'] ?>"><br>
      <input type="hidden" name="codigo" value="<?php echo $regalu['codigo'] ?>">
      <select name="codigocurso">
        <?php
$registros = mysqli_query($connection, "select * from cursos") or
    die("Problemas en el select:" . mysql_error());
    while ($reg = mysqli_fetch_array($registros)) {
        if ($regalu['codigocurso'] == $reg['codigo']) {
            echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecurso]</option>";
        } else {
            echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
        }

    }
    ?>
      </select>
      <br>
      <input type="submit" value="Modificar">
    </form>
  <?php
} else {
    echo "No existe alumno con dicho código";
}

?>
</body>
</html>