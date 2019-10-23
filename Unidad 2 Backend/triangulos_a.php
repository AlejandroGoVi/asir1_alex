<?php
function tipo($a, $b, $c) {
	$r='rectangulo';
		if ($a>90 || $b>90 || $c>90) {
			$r='obtusangulo';
			}
		
		if($a<90 and $b<90 and $c<90){
			$r='acutangulo';
	}
	return $r;
}

function tipo_lados($a,$b,$c){
$r='escaleno';
if($a==$b or $b==$c) $r='isosceles';
if($a==$b and $b==$c) $r='equilátero';
echo $r;
}

echo tipo(30,90,60)."<br>";
echo tipo(60,60,60)."<br>";
echo tipo(30,30,120)."<br>";

echo tipo_lados(1,1,1).'<br>';
echo tipo_lados(1,1,2).'<br>';
echo tipo_lados(2,1,1).'<br>';
echo tipo_lados(1,2,1).'<br>';
echo tipo_lados(2,1,1).'<br>';
echo tipo_lados(2,2,2).'<br>';
echo tipo_lados(3,2,1).'<br>';
echo tipo_lados(4,4,4).'<br>';
echo tipo_lados(0,0,0).'<br>';