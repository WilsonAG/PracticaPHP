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
    if ($_REQUEST['clave'] == 'z80') {
        echo "Bienvenid@";
    }else{
        header('Location: redirect.php?error=1');
    }
    ?>
</body>
</html>