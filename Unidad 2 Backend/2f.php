 <?php
 /*
 $Dias = array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo');
 echo "Hoy es ".$Dias[0]." y mañana sera ".$Dias[1];
 */

 $meses=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
	
 ];
for($i=0;$i<12;$i=$i+1)
	echo $meses[$i];

foreach($meses as $mes)
	echo $mes;
	
$mes =
array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

echo "Estamos a". $mes[9];
 ?>