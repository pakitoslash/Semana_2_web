<?php
	$nombre="Francisco";
	$contrasena="prebe28"; 

		
	if(isset($_POST["nombre"]) && $_POST["nombre"]!="" && isset($_POST["contrasena"]) && $_POST["contrasena"]!="") 
	{
		if($_POST["nombre"]==$nombre && $_POST["contrasena"]==$contrasena) 
		{
			header("Location: inok.php");		//Funcion que nos redirije
		}
		else
		{
			header("Location: inbad.php");
		}
	}
	else
	{
		header("Location: inbad.php");
	}
	
?>