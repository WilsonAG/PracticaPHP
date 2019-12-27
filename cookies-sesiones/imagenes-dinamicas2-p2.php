<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    echo "La direccion: $_REQUEST[direccion] tiene";
    ?>
    <img src="imagenes-dinamicas2-p3.php?puntos=<?php echo $_REQUEST['puntos']; ?>">
</body>

</html>