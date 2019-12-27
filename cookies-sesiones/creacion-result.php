<?php
setcookie("usuario", $_REQUEST['nombre'], time() + 60 * 60 * 24 * 365, "/"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Se creó la cookie.
  <br>
  <a href="creacion.php">Ir a la otra página</a>
</body>
</html>