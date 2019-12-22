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
        $nSports = 0;

        if (isset($_REQUEST["sport1"])) {
            $nSports++;
        }
        if (isset($_REQUEST["sport2"])) {
            $nSports++;
        }
        if (isset($_REQUEST["sport3"])) {
            $nSports++;
        }
        if (isset($_REQUEST["sport4"])) {
            $nSports++;
        }
        echo "$name, usted practica $nSports deportes";
    ?>
</body>
</html>