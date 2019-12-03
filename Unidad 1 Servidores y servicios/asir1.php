<html>
<body>
Alejandro Gómez Villa (Mi ip)
<a href=”192.168.0.57”></a>
Bruno 
<a href”192.168.0.55”></a>
<form action="Datos.php" method="post">
	Nombre: <input type="text" name="nombre"><br>
	Email:  <input type="email" name="email"><br>
	<input type="submit" value="Enviar">
<?php
$file = fopen("visitas.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
echo fwrite($file,$ip."\r\n");
fclose($file);
?>
</form>
</body>
</html>