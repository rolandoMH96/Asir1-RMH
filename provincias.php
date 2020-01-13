<?php 
$conn = new mysqli('localhost','root','','provincias');
$conn->query("SET NAMES utf8;");
$provincias=$conn->query("
	SELECT * FROM provincias;
")->fetch_all(MYSQLI_ASSOC);
if(0){
	echo '<pre>';
	print_r($provincias);
	echo '</pre>';
}
if(0){ 
	foreach($provincias as $p){
		if($p['autonomia']=='Galicia'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}
if(0){//mostrar todas las provincias
	foreach($provincias as $p)
		{
			echo $p['provincia'];
			echo '<br/>';
		}
}
if(0){//mostrar todas las autonomias
	foreach($provincias as $p)
		{
			echo $p['autonomia'];
			echo '<br/>';
		}
}
if(0){	// provincias que empiezan por A
	foreach($provincias as $p)
		if($p['provincia'][0]=='A')
			echo $p['provincia'].'<br/>';
		}
	
if(0){
		foreach($provincias as $p){
			echo $p['provincia'].' ';
			echo round($p['poblacion']/$p['superficie'],4);
			echo '<br/>';}
}
if(1){	// listado de autonomias
	foreach($provincias as $p)
		$autonomias[]=$p['autonomia'];
	$autonomias=array_unique($autonomias);
	echo '<ol>';
	foreach($autonomias as $autonomia)
		echo '<li>'.$autonomia.'</li>';
	echo '</ol>';
}