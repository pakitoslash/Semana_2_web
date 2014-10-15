<?php 

	require_once './../conexiones/conexion.php';

	$registro_query = "INSERT INTO users(user,pass,mail) VALUES(
		'".$_POST['user']."',
		'".$_POST['pass']."',
		'".$_POST['mails']."'
		)";

	$registro_object = $conexion->query($registro_query);

	echo "Usuario Registrado";

	header("Location: ./../index.php");

	
 ?>