<?php
function angulo ($a,$b,$c){
		$r='Triángulo Acutangulo';
			if($a==90 or $b==90 or $c==90)
			$r='Triágulo rectangulo';
			if($a>90 or $b>90 or $c>90)
			$r='Triángulo obtusangulo';
		return $r;
}
function longitud($d,$e,$f){
		$r='escaleno';
		if($d==$e || $e==$f)
			$r="Isósceles";
		
		if($e==$f and $d==$f)
			$r="Equilatero";
		return $r;
	
	}
function c($a,$b,$c,$d,$e,$f){
		return angulo($a,$b,$c).' y '.longitud ($d,$e,$f);
	}
echo c(60,60,60,1,1,1).'<br>';
echo c(45,45,90,1,1,1.4241).'<br>';
echo c(135,23,21,1,2,3);