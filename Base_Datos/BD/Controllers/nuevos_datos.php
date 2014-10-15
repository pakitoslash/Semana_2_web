<?php 
	$id= $_GET['id'];

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./../css/bootstrap.css">
	<title>Document</title>
</head>
<body>

	<?php
		include("./../barra.php");  //Inclute el diseño de otras paginas
	?>	

		
	<div class="container">
		<div class=" col-lg-offset-4 col-lg-4">
			<form role="form" action="./actualizar.php" method="POST">
				<fieldset>
					<legend>Cambiar</legend>
				  <div class="form-group">
				    <label for="Usuario">Usuario:</label>
				    <input type="text" name="user" class="form-control" id="Ususario" placeholder="Usuario">
				  </div>
				  <div class="form-group">
				    <label for="Contraseña">Password:</label>
				    <input type="password" name="pass"class="form-control" id="Contraseña" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="Correo">Correo:</label>
				    <input type="email" name="mail" class="form-control" id="Correo" placeholder= "Correro">
				  </div>
				  <input type="hidden" name="id" value="<?php echo $id ?>">
				  <button type="submit" class="btn btn-default">Enviar</button>
				</fieldset>
			</form>
		</div>
	</div>
	
	
</body>
</html>

