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
	$connection = mysqli_connect("remotemysql.com", "DhtgyEX80h", "SwtCcW3FT3", "DhtgyEX80h") or
	die("Problemas con la conexión");

	$registros = mysqli_query($connection, "select nombrecurso from cursos") or
	die("Problemas en el select:" . mysqli_error($connection));

	while ($reg = mysqli_fetch_array($registros)) {
		echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
		echo "<hr>";
	}

	$registros = mysqli_query($connection, "select count(*) as cantidad from cursos") or
	die("Problemas en el select:" . mysqli_error($connection));

	$reg = mysqli_fetch_array($registros);
	echo "La cantidad de cursos son :" . $reg['cantidad'];

	mysqli_close($connection);

?>
</body>
</html>