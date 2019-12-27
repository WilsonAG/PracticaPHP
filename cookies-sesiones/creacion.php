<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Document</title>
	</head>
	<body>
		<form method="post" action="creacion-result.php">
			Ingrese su nombre:
			<input
				type="text"
				name="nombre"
				value="<?php 
				if (isset($_COOKIE['usuario'])) {
					echo $_COOKIE['usuario'];
				} ?>"
			/>
			<br />
			<input type="submit" value="confirmar" />
		</form>
	</body>
</html>
