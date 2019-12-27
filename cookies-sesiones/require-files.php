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
    require_once 'require-files-p2.php';
    $conexion = getConnection();
    ($registros = mysqli_query(
    	$conexion,
        "select alu.codigo as codigo,nombre,mail,codigocurso, nombrecurso 
        from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso"
    )) or die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "$reg[codigo] <br>";
        echo "$reg[nombre] <br>";
        echo "$reg[mail] <br>";
        echo "$reg[nombrecurso]<br>";
        echo "<hr>";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>