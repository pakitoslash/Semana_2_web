<?php 
	require_once './../conexiones/conexion.php';

	$usuarios_query = "SELECT * FROM users";
	$usuarios_object = $conexion->query($usuarios_query);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="./../css/bootstrap.min.css">
	<link rel="stylesheet" href="./../css/bootstrap-theme.css">
	<meta charset="UTF-8">
	<title>Conexión</title>

	<style>
		td:nth-child(even)
		{
				
		}
	</style>>

</head>
<body>
	  	<?php
			include("./../barra.php");  //Inclute el diseño de otras paginas
		?>	


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-striped">
					<thead>
						<td>Id</td>
						<td>Usuario</td>
						<td>Contraseña</td>
						<td>Correo</td>
						<td>Opciones</td>


					</thead>
					<tbody>
						<?php while($usuarios_row = mysqli_fetch_assoc($usuarios_object)) {?>
						<tr>
							<td><?php echo $usuarios_row['id'] ?></td>
							<td><?php echo $usuarios_row['user'] ?></td>
							<td><?php echo $usuarios_row['pass'] ?></td>
							<td><?php echo $usuarios_row['mail'] ?></td>
							<td><a href="borrar.php?id=<?php echo $usuarios_row['id']; ?>" class="btn btn-info">Borrar</a><a href="nuevos_datos.php?id=<?php echo $usuarios_row['id']; ?>" class="btn btn-info">Actualizar</a></td>
							
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>