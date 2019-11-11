<?php
	function longitud($a,$b,$c){
		$r='triangulo escaleno';
		if($a==$b|| $a==$c || $b==$c){
			$r="triangulo Isósceles";
		
		if($b==$c and $a==$c)
			$r="triangulo Equilatero";
	}
		return $r;
	}
	echo "equilatero"."<br>";
	echo longitud(5,5,5)."<br>";
	echo "isosceles"."<br>";
	echo longitud(2,2,1)."<br>";
	echo "escaleno"."<br>";
	echo longitud(2,4,5);
?>