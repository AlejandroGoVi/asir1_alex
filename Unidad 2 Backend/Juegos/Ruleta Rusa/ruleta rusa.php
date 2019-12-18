<?php
// opciones de ruleta
$balas = [1,0,0,0,0,0];
$balas2 = [0,1,0,0,0,0];
$balas3 = [0,0,1,0,0,0];
$balas4 = [0,0,0,1,0,0];
$balas5 = [0,0,0,0,1,0];
$balas6 = [0,0,0,0,0,1];
//aleatorio
shuffle($balas);

print_r($balas);
// Si estas muerto o no

if ($balas == $balas) {
	
	echo '<div style="font-size:3em">Has muerto!!</div>';
}
	
elseif ($balas == $balas2,$balas3,$balas4,$balas5,$balas6) {
	
	echo '<div style="font-size:3em">Sigues vivo!!</div>';
}



?>