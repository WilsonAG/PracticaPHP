<?php
  $conexion = mysqli_connect("remotemysql.com", "DhtgyEX80h", "SwtCcW3FT3", "DhtgyEX80h") or
  die("Problemas con la conexión");

mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso) values ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[radio1])") or
  die("Problemas en el select".mysqli_error($conexion));

echo "El alumno fue dado de alta.";
?>