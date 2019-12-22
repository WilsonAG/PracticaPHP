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
        $diasSemana[] = "Lunes";
        $diasSemana[] = "Martes";
        $diasSemana[] = "Miercoles";
        $diasSemana[] = "Jueves";
        $diasSemana[] = "Viernes";
        $diasSemana[] = "Sabado";
        $diasSemana[] = "Domingo";

        $first = $diasSemana[0];
        $last = $diasSemana[count($diasSemana)-1];
        echo "Primero: $first <br>";
        echo "Ultimo: $last" ;
    ?>
</body>
</html>