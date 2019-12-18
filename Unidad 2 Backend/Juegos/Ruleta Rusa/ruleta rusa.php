<?php
// opciones de ruleta
$balas = [1,0,0,0,0,0];

//aleatorio
shuffle($balas);

print_r($balas);
// Si estas muerto o no

if ($balas = [1]) {
	
	echo '<div style="font-size:3em">Has muerto!!</div>';
}

else {
	echo '<div style="font-size:3em">Sigues vivo!!</div>';
}

?>