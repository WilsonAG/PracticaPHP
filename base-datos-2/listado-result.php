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
  
    $registros = mysqli_query($connection, "select nombre,
                                                 mail,
                                                 codigocurso
                                                 from alumnos as alu
                                            inner join cursos as cur on cur.codigo=alu.codigocurso
                                            where alu.codigo=$_REQUEST[codigo]") or
      die("Problemas en el select:" . mysqli_error($connection));
  
    if ($reg = mysqli_fetch_array($registros)) {
      echo "Nombre:" . $reg['nombre'] . "<br>";
      echo "Mail:" . $reg['mail'] . "<br>";
      echo "Curso:" . $reg['codigocurso'] . "<br>";
    } else {
      echo "No existe un alumno con ese código.";
    }
    mysqli_close($connection);
    ?>
</body>
</html>