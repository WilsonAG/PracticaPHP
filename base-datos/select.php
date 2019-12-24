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
    $regs = mysqli_query($connection, "select * from cursos");

    echo "<ul>";
    while ($reg = mysqli_fetch_array($regs)) {
        echo "<li>";
        echo "Codigo:". $reg['codigo']. "| Nombre:". $reg['nombrecurso']        ;
        echo "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>