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
        function verifyPass($pass1, $pass2){
            if ($pass1 != $pass2) {
                echo "Las claves son distintas";
            }else{
                echo "Enviar al server";
            }
        }
        echo "Usuario ". $_REQUEST["user"].":<br>";
        verifyPass($_REQUEST["pass1"], $_REQUEST["pass2"]);
    ?>
</body>
</html>