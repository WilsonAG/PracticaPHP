<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php if (isset($_COOKIE['user'])) {
    	echo "Cookie de sesión creada. Su valor es $_COOKIE[user]";
    } else {
        echo "No existe cookie de sesión <br>"; ?>
        <form action="session-p2.php">
            <label>Username: 
                <input type="text" name="name"> 
            </label>
            <input type="submit" value="Crear cookie de sesion">
        </form>
    <?php
    } ?>
  <br>
</body>
</html>