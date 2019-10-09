<?php
function angulo ($a,$b,$c) {
		$r='Acutangulo';
			if($a==90 or $b==90 or $c==90)
			$r='rectangulo';
			if($a>90 or $b>90 or $c>90)
			$r='obtusangulo';
		
		return $r;
		}
echo angulo(90,45,45).'<br>';
echo angulo(60,60,60).'<br>';
echo angulo(120,30,30);