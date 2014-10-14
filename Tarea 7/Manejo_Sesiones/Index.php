<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<link rel="stylesheet" href="css/micss.css">

	<?php
		include("auxiliar.php")  //Inclute el diseño de otras paginas
	?>

	
	<nav>
		<form id="uno" name="form1" method="post" action="validar.php">
			<p align="center">Usuario:<input name="nombre" type="text"><br>
			contrase&ntildea:<input name="contrasena" type="password"><br>
			<input type="hidden" name="priv" value="1" align="center">
			<button type="submit">Entrar</button></p>

		</form>
	</nav>

</body>
</html>