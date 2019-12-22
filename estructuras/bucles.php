<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bucles</title>
</head>
<body>
<?php 
    echo "Tablas de multiplicar: <br>" ;
    echo "Con for <br>";
    for ($i=0; $i <= 12 ; $i++) { 
        $result = $i*2;
        echo "2 x $i = $result <br>";
    }

    echo "Con while <br>";
    $i = 0;
    while ($i <= 12) {
        $result = $i*3;
        echo "3 x $i = $result <br>";
        $i++;
    }

    echo "Con do/while";
    $i = 0;
    do {
        $result = $i*4;
        echo "4 x $i = $result <br>";
        $i++;
    } while ($i <= 12);
?>
</body>
</html>