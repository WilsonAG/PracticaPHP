<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="select-result.php" method="post">
        <label>
            Nombre:     
            <input type="text" name="name">
        </label>

        <label>
            Seleccione sus ingresos:
            <select name="ingresos">
                <option value="500">1-1000</option>
                <option value="1500">1001-3000</option>
                <option value="3500">&gt3000</option>          
            </select>
        </label>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>