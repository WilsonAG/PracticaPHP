<?php
setcookie('titular', $_REQUEST["radio1"], time() + 60 * 60 * 24, '/'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo "Se creo la cookie"; ?>
    <a href="delete.php">Ir a la otra página</a>
</body>
</html>