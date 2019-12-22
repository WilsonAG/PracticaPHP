<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicional</title>
</head>
<body>
    <?php 
        $number = rand(1,3);
        
        if ($number == 3) {
            echo "El numero generado es tres";
        }elseif ($number == 2) {
            echo "El numero generado es dos";
        } elseif ($number == 1) {
            echo "El numero generado es uno";
            
        }
    ?>
</body>
</html>