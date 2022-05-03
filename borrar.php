<?php
$respuesta = [];
$mysqli = new mysqli("localhost", "root", "", "proyecto1");
if($mysqli->connect_error){
	die('Error de conexión ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$query = "DELETE FROM personas WHERE id = ".$_REQUEST['id'];
$mysqli->query($query);
?>