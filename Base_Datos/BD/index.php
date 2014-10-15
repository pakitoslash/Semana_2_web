<?php 
	if(!isset($_SESSION)){
		session_start();
	}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Conexión</title>
</head>
<body>
	<?php
		include("barra.php");  //Inclute el diseño de otras paginas
	?>	



	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<form role="form" action="Controllers/registro.php" method="POST">
				<label for="Usuario">Usuario:</label>
				<input type="text" name="user" placeholder:"Usuario"><br>
				<label for="contrasena">Contraseña:</label>
				<input type="password" name="pass" placeholder:"Contraseña"><br>
				<label for="Correo">Correo:</label>
				<input type="text" name="mails" placeholder:"Correo"><br>
				<input type="submit" class="btn btn-success">
			</form>
		</div>
	</div>
	</div>
	
</body>
</html>