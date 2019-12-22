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
        $name = $_REQUEST["name"];
        $age = $_REQUEST["age"];
        echo "Su nombre es $name <br>";
        if ($age < 18) {
            echo "Usted es menor de edad";
        }else{
            echo "Usted es mayor de edad";
        }
    ?>
</body>
</html>