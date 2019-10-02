<?php
function calcula(){
	//numeros 
		$num1=5;
		$num2=0;
		
	//operaciones
		$suma=$num1+$num2;
		$resta=$num1-$num2;
		$multi=$num1*$num2;
		if ($num2 != 0) $divi=$num1/$num2;
	
	//Informacion en el navegador
	$r=null;

	$r=$r. "<br/>";
	$r=$r. "suma:";
	$r=$r. " suma de ".$num1." mas ".$num2." = ".$suma;

	$r=$r. "<br/>";
	$r=$r. "resta:";
	$r=$r. " resta de ".$num1." menos ".$num2." = ".$resta;

	$r=$r. "<br/>";
	$r=$r. "multi:";
	$r=$r. " multi de ".$num1." por ".$num2." = ".$multi;

	$r=$r. "<br/>";
	$r=$r. "div:";
	if ($num2 != 0) $r=$r. " divi de ".$num1." entre ".$num2." = " .$divi;
	return $r;
}
$txt=calcula();
echo $txt;

// MVC
// modelo-> datos
// vista->presentacion
// controlador->lógica



?>