
  <?php
  ($ar = fopen("quejas.txt", "r")) or die("No se pudo abrir el archivo");
  while (!feof($ar)) {
  	$linea = fgets($ar);
  	$lineasalto = nl2br($linea);
  	echo $lineasalto;
  }
  fclose($ar);

?>
