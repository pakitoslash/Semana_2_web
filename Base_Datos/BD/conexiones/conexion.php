<?php 
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_BASE","programacion_web");
define("DB_SERVER","localhost");

$conexion = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_BASE);
 ?>