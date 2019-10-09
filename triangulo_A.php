<?php
	function longitud($a,$b,$c){
		$r='triangulo escaleno';
		if($a==$b || $b==$c){
			$r="triangulo Isósceles";
		
		if($b==$c and $a==$c)
			$r="triangulo Equilatero";
	}
		return $r;
	}
	echo longitud(5,5,5)."<br>";
	echo longitud(6,6,9)."<br>";
	echo longitud(7,8,9);
?>