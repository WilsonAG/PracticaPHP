<?php
session_start();
($connection = mysqli_connect(
	"remotemysql.com",
	"DhtgyEX80h",
	"SwtCcW3FT3",
	"DhtgyEX80h"
)) or die("Problemas con la conexión");

($result = mysqli_query(
	$connection,
	"select nombre from alumnos where mail ='$_REQUEST[mail]'"
)) or die("Problemas en el select:" . mysqli_error($connection));

if ($reg = mysqli_fetch_array($result)) {
    $_SESSION['nombre'] = $reg['nombre'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="variable-session-p3.php">Ingresar a pagina principal</a>;
</body>
</html>
