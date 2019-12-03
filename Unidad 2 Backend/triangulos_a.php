<?php
function tipo_lados($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c) 
	{$r='isosceles';
}
	if($a==$b and $b==$c)  {
	$r='equilátero';
}
return $r;
}




//Banco the test
echo $r(1,1,2)."<br>";
echo $r(1,2,2)."<br>";
echo $r(2,1,2)."<br>";





?>