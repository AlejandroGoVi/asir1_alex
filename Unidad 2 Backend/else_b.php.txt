<?php
function nota($s) {
	
	$r='PENDIENTE';
	if($s>=5) {
		$r=('APROBADO');
		
	}
	if($s>=7) {
		$r=('NOTABLE');
		
	}
	if($s>=8.5) {
		$r=('SOBRESALIENTE');
		
	}
	return $r;
	
	
	
}
$n=8;
echo nota($n);
if($n>=5) echo ' ('.$n.')';




?>