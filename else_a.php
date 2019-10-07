<?php
function nota($a){
	if ($a<5){
	$r='no apto';
	}
	
	else{ 
	$r='apto';
	}
	return $r;

}
echo nota(7) .'<br>';
echo nota(2) .'<br>';