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
        $option = $_REQUEST["opt"];
        echo "$name <br>";
        switch ($option) {
            case 1:
                echo "Sin estudios";
                break;
            case 2:
                echo "Con estudios primarios";
                break;
            case 3:
                echo "Con estudios secundarios";
                break;
        }
    ?>
</body>
</html>