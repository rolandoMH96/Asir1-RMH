<?php
function mes($n){
	$a=[
	[
	'mes'=>'Enero',
	'dias'=>'3',
	'estacion'=>'Verano'
	],
	[
	'mes'=>'Febrero',
	'dias'=>'28',
	'estacion'=>'Verano'
	],
	[
	'mes'=>'Marzo',
	'dias'=>'31',
	'estacion'=>'Primavera'
	],
	[
	'mes'=>'Abril',
	'dias'=>'30',
	'estacion'=>'Otoño'
	],
	
	[
	'mes'=>'Mayo',
	'dias'=>'31',
	'estacion'=>'Otoño'
	],
	[
	'mes'=>'Junio',
	'dias'=>'30',
	'estacion'=>'Verano'
	],
	[
	'mes'=>'Julio',
	'dias'=>'31',
	'estacion'=>'Verano'
	],
	[
	'mes'=>'Agosto',
	'dias'=>'31',
	'estacion'=>'Verano'
	],
	
	[
	'mes'=>'Septiembre',
	'dias'=>'30',
	'estacion'=>'Verano'
	],
	[
	'mes'=>'Octubre',
	'dias'=>'31',
	'estacion'=>'invierno'
	],
	[
	'mes'=>'Noviembre',
	'dias'=>'30',
	'estacion'=>'invierno'
	],
	[
	'mes'=>'Diciembre',
	'dias'=>'31',
	'estacion'=>'invierno'
	]
	
	];
	$r=null;
	$r=$r.$a[$n-1]['mes'].'<br>';
	$r=$r.$a[$n-1]['dias'].'<br>';
	$r=$r.$a[$n-1]['estacion'];
	return $r;

} 
echo mes (2).'<br>';
echo mes (5).'<br>';
echo mes (12).'<br>';
echo mes (3);
?>
	