<p>Alejandro</p>
<a href="http://192.168.0.114/asir1-cc/index.php">Carlos Campo</a>




<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>