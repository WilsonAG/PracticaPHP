<?php

function getConnection()
{
	($connection = mysqli_connect(
		"remotemysql.com",
		"DhtgyEX80h",
		"SwtCcW3FT3",
		"DhtgyEX80h"
	)) or die("Problemas con la conexión");
	return $connection;
}
?>
