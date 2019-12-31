<?php
if (checkdate($_REQUEST['day'], $_REQUEST["month"], $_REQUEST["year"])) {
	($connection = mysqli_connect(
		"remotemysql.com",
		"DhtgyEX80h",
		"SwtCcW3FT3",
		"DhtgyEX80h"
    )) or die("Problemas con la conexión");
    $date = "$_REQUEST[year]-$_REQUEST[month]-$_REQUEST[day]";
    
    mysqli_query($connection, "insert into alumnos (nombre,mail,codigocurso,fechanac) values('$_REQUEST[name]','$_REQUEST[mail]',$_REQUEST[course], '$date')") or die ("problemas con la conexion". mysqli_error($connection));
    mysqli_close($connection);
    echo "Alumno registrado";
}else{
    echo "algo esta mal";
}
?>
