<?php


function tipo_lados($a,$b,$c){
$r='escaleno';
if($a==$b or $b==$c) $r='isosceles';
if($a==$b and $b==$c) $r='equilátero';
echo $r;
}

echo tipo_lados(1,1,1).'<br>';
echo tipo_lados(1,1,2).'<br>';
echo tipo_lados(2,1,1).'<br>';
echo tipo_lados(1,2,1).'<br>';
echo tipo_lados(2,1,1).'<br>';
echo tipo_lados(2,2,2).'<br>';
echo tipo_lados(3,2,1).'<br>';
echo tipo_lados(4,4,4).'<br>';
echo tipo_lados(0,0,0).'<br>';