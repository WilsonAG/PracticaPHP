<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <?php if (isset($_REQUEST['error'])) {
      	echo "Ingresó clave incorrecta<br>";
      } ?>
  <form method="post" action="redirect-p2.php">
    Ingrese el clave:
    <input type="password" name="clave">
    <br>
    <input type="submit" value="confirmar">
  </form>
</body>
</html>