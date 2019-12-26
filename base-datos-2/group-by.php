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

$registros = mysqli_query($connection, "select count(alu.codigo) as cantidad,
                                          nombrecurso,
                                          codigocurso
                                      from alumnos as alu
                                      inner join cursos as cur on cur.codigo=alu.codigocurso
                                      group by alu.codigocurso") or
die("Problemas en el select:" . mysqli_error($connection));
while ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
    echo "Cantidad de inscriptos:" . $reg['cantidad'] . "<br>";
    $registros2 = mysqli_query($connection, "select nombre
                                           from alumnos
                                           where codigocurso=$reg[codigocurso]") or
    die("Problemas en el select:" . mysqli_error($connection));
    while ($reg2 = mysqli_fetch_array($registros2)) {
        echo $reg2['nombre'] . " - ";
    }
    echo "<hr>";
}
mysqli_close($connection);
?>
</body>
</html>