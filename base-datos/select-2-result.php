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
         $regs = mysqli_query($connection, "select * from alumnos where nombre='$_REQUEST[nombre]'")  or
         die("Problemas en el select:" . mysqli_error($connection));

         $count = 0;
         while ($reg = mysqli_fetch_array($regs)) {
             $count++;
             echo "Codigo: $reg[codigo]";
             echo "<br>";
             echo "Nombre: $reg[nombre]";
             echo "<br>";
             echo "Mail: $reg[mail]";
             echo "<br>";
             echo "Codigo del curso: $reg[codigocurso]";
             echo "<hr>";
         }

         if ($count == 0) {
             echo "No hay alumnos con ese nombre";
         }

         mysqli_close($connection);
    ?>
</body>
</html>