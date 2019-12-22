<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="create-files.php" method="post">
        <label>
            Nombre
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Direccion
            <input type="text" name="direction">
        </label>
        <br>
        <label>
            Jamon y Queso
            <input type="checkbox" name="jamon-queso">
        </label>
        <label>
            Cantidad
            <input type="number" name="njq">
        </label>
        <br>
        <label>
            Napolitana
            <input type="checkbox" name="napolitana">
        </label>
        <label>
            Cantidad
            <input type="number" name="nnapo">
        </label>
        <br>
        <label>
            Muzarella
            <input type="checkbox" name="muzarella">
        </label>
        <label>
            Cantidad
            <input type="number" name="nmuza">
        </label>
        <br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>