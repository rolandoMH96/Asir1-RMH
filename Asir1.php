<?php
$f=fopen('visitas.txt','a');
echo "<a href='http://192.168.0.91/Asir1_Javi/asir1.php'>Javier</a>";
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>