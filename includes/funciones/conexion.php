<?php 
$con = new mysqli("localhost", "root", "", "evaluaciondocente");

if ($con->connect_error) {
	die("CONEXION FALLIDA: " . $con->connect_error);
}

 ?>