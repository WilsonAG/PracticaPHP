<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Example</title>
</head>
<body>
    <?php 
        $date = date("d/M/Y");
        echo "La fecha es: $date <br>";
    
        $day = date("d");
        $month = date("M");
        if ($day == 25 && $month == "Dec") {
            echo "Feliz navidad";
        }
    ?>

</body>
</html>