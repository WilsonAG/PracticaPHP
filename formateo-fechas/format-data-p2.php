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
    echo "Nombre:" . $_REQUEST['nombre'];
    echo "<br>";
    echo "Mail:" . $_REQUEST['mail'];
    echo "<br>";
    echo "Importe a donar:";
    printf("%07d", $_REQUEST['importe']);
    ?>

</body>
</html>