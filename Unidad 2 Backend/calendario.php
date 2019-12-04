<?php
function Mes($n){
  $a=[
	[
		'Nombre'=>'Enero',
		'Dias'=>'31',
		'Estacion'=>'Invierno',
	],
	[
		'Nombre'=>'Febrero',
		'Dias'=>'28',
		'Estacion'=>'Invierno',
	],
	[
		'Nombre'=>'Marzo',
		'Dias'=>'31',
		'Estacion'=>'Invierno',
	],
	[
		'Nombre'=>'Abril',
		'Dias'=>'30',
		'Estacion'=>'Primavera',
	],
	[
		'Nombre'=>'Mayo',
		'Dias'=>'31',
		'Estacion'=>'Primavera',
	],
	[
		'Nombre'=>'Junio',
		'Dias'=>'30',
		'Estacion'=>'Verano',
	],
	[
		'Nombre'=>'Julio',
		'Dias'=>'31',
		'Estacion'=>'Verano',
	],
	[
		'Nombre'=>'Agosto',
		'Dias'=>'31',
		'Estacion'=>'Verano',
	],
	[
		'Nombre'=>'Septiembre',
		'Dias'=>'30',
		'Estacion'=>'Otoño',
	],
	[
		'Nombre'=>'Octubre',
		'Dias'=>'31',
		'Estacion'=>'Otoño',
	],
	[
		'Nombre'=>'Noviembre',
		'Dias'=>'30',
		'Estacion'=>'Invierno',
	],
	[
		'Nombre'=>'Diciembre',
		'Dias'=>'31',
		'Estacion'=>'Invierno',
	],
	];
$r=null;
$r=$r.$a[$n-1]['Nombre']."<br>";
$r=$r.$a[$n-1]['Dias']."<br>";
$r=$r.$a[$n-1]['Estacion']."<br>";
return $r;
if ($n=<0){
	$r=Fallo;
}
if ($n=>12){
	$r=Fallo;
}
}
echo meses(5)."Mayo.<br>";
echo meses(7)."Julio.<br>";
echo meses(0)."Fallo.<br>";
echo meses(13)."Fallo.<br>";




?>
