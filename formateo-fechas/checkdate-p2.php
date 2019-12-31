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
    if (checkdate($_REQUEST["day"], $_REQUEST["month"], $_REQUEST["year"])) {
        echo "Fecha ingresada correctamente";
    }else{
        echo "La fecha no es valida";
    }
    
    ?>
</body>
</html>