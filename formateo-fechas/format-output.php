<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <?php

      $tabla = "";
      for ($f = 0; $f <= 255; $f++) {
        $tabla = $tabla . sprintf("%c\n", $f);
      }
      echo $tabla;
      ?>
</body>
</html>