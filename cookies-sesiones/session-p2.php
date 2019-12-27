<?php 
setcookie('user', $_REQUEST["name"], 0);
echo "Cookie de sesion creada";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="session.php">Regresar</a>
</body>
</html>
