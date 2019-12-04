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
echo $tipo_lados(1,1,2)." =Isosceles.<br>";
echo $tipo_lados(3,2,3)." =Isosceles.<br>";
echo $tipo_lados(2,2,2)." =Equilatero.<br>";
echo $tipo_lados(1,2,2)." =Isosceles.<br>";
echo $tipo_lados(2,1,2)." =Isosceles.<br>";
echo $tipo_lados(1,2,3)." =Escaleno.<br>";
echo $tipo_lados(3,3,3)." =Equilatero.<br>";
echo $tipo_lados(0,0,0)." =Fallo(No es equilatero esta en 1D).<br>";
?>