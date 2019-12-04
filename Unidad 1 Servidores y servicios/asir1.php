<html>
<body>

<a href="http://localhost/asir1_alex/">Alejandro Gómez Villa (Mi ip) </a>
<p> y </p>
<a href="192.168.0.55">Bruno (Compañero)</a>

<?php
$file = fopen("visitas.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
echo fwrite($file,$ip."\r\n");
fclose($file);
?>

<form action="Datos.php" method="post">
	Nombre: <input type="text" name="nombre"><br>
	Email:  <input type="email" name="email"><br>
	<input type="submit" value="Enviar">

</form>
</body>
</html>