<?php


function longitud($a,$b,$c){
		$r='escaleno';
		if($a==$b || $b==$c)
			$r="Isósceles";
		
		if($b==$c and $b==$c)
			$r="Equilatero";
		return $r;
}
function angulo ($a,$b,$c){
		$r='Triángulo Acutangulo';
			if($a==90 or $b==90 or $c==90)
			$r='Triágulo rectangulo';
			if($a>90 or $b>90 or $c>90)
			$r='Triángulo obtusangulo';
		return $r;	
	}
$a= [
	'lados'=>[1,1,1],
	'angulo'=>[60,60,60],
	];
$a= [
	'lados'=>[1,1,1.4142],
	'angulo'=>[90,45,45],
	];
	function c($a){
		return longitud(
		$a['lados'][0],
		$a['lados'][1],
		$a['lados'][2]).' & '.Angulo(
		$a['angulo'][0],
		$a['angulo'][1],
		$a['angulo'][2]);
		}
echo c($a);
?>
