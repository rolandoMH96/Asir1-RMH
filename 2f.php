<?php
$a=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
	];
	echo '<pre>';
	print_r ($a);
	echo '</pre>';
	for ($i = 0; $i <12; $i++)
		echo $a[$i]. '<br>';
foreach ($a as $mes){
		echo '<pre>';
		echo $mes;
		echo'</pre>';
}
function mes($i){
	$a=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
	];
	return $a[$i-1];
}
echo mes(6);
?>