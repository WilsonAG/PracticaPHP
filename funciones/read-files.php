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
        $file = fopen("pedidos.txt", "r") or 
            die("Error al leer el archivo");
        while (!feof($file)) {
            $line = fgets($file);
            $line2 = nl2br($line);

            echo "$line2";
        }

        fclose($file);
    ?>
</body>
</html>