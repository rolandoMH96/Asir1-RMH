<?php
echo '<a href="http://192.168.0.114/asir1-cc/asir1.php">Página de carlos</a>';
echo "<br>";
echo "Aarón Martín López";
echo "<br>";
echo '<a href="http://192.168.0.91/asir1_Javi/asir1.php">Página de Javi</a>';
  $archivo="visitas.txt";
  $proceso=fopen($archivo,"a") or die("basura");
  $ip=$_SERVER['REMOTE_ADDR'];
  $hoy = date('Y-m-d H:i:s');
  $datos="La ip es:".$ip." y fecha: ".$hoy."\r\n";
  fwrite($proceso,$datos);
  fclose($proceso);
?>