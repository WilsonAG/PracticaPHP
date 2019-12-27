<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <?php if (isset($_COOKIE['titular'])) {
      	echo $_COOKIE['titular'] . "<br>";
      } else {
      	 ?>
    <form method="post" action="delete-p2.php">
      Configuracion del titular del sitio:<br>
      <input type="radio" name="radio1" value="Noticias Politicas">Noticias Políticas.<br>
      <input type="radio" name="radio1" value="Noticias Economicas">Noticias Económicas.<br>
      <input type="radio" name="radio1" value="Noticias Deportivas">Noticias Deportivas.<br>
      <input type="submit" value="Confirmar">
    </form>
  <?php
      } ?>
  <a href="delete-p3.php">Borrar cookies</a>
</body>
</html>