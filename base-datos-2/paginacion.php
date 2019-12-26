<?php
if (isset($_REQUEST['pos']))
  $inicio = $_REQUEST['pos'];
else
  $inicio = 0;
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $connection = mysqli_connect("remotemysql.com", "DhtgyEX80h", "SwtCcW3FT3", "DhtgyEX80h") or
  die("Problemas con la conexión");

  $registros = mysqli_query($connection, "select codigo,
                                               nombrecurso
                                          from cursos
                                          limit $inicio,2") or
    die("Problemas en el select:" . mysqli_error($connection));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombrecurso'] . "<br>";
    echo "<hr>";
  }
  mysqli_close($connection);
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - 2;
    echo "<a href=\"paginacion.php?pos=$anterior\">Anteriores </a>";
  }
  if ($impresos == 2) {
    $proximo = $inicio + 2;
    echo "<a href=\"paginacion.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  ?>

</body>

</html>