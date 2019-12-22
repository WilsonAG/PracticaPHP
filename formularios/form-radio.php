<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form-radio-result.php" method="post">
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        
        <label>
            1
            <input type="radio" name="opt" value="1"> 
        </label>
        <label>
            2
            <input type="radio" name="opt" value="2">
        </label>
        <label>
            3
            <input type="radio" name="opt" value="3">
        </label>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>