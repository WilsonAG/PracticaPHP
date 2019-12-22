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
        $name = $_REQUEST["name"];
        $direction = $_REQUEST["direction"];

        $file = fopen("pedidos.txt", "a") or
                die("Problemas al abrir el archivo");
        fputs($file, "Nombre: $name \n");
        fputs($file, "Direccion: $direction \n");
        if (isset($_REQUEST["jamon-queso"])) {
            fputs($file, 'Jamon y queso:' .$_REQUEST["njq"] ."\n");
        }
        if (isset($_REQUEST["napolitana"])) {
            fputs($file, 'Napolitana:' .$_REQUEST["nnapo"] ."\n");
        }
        if (isset($_REQUEST["muzarella"])) {
            fputs($file, 'Muzarella:' .$_REQUEST["nmuza"] ."\n");
        }
        fputs($file, "......................................................................................\n");
        fclose($file);
        echo "Datos se enviaron correctamente";

    ?>
</body>
</html>