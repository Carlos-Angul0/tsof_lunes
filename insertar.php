<?php
$respuesta = [];
$mysqli = new mysqli("localhost", "root", "", "proyecto1");
if($mysqli->connect_error){
	die('Error de conexión ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$query = "INSERT INTO personas (nombre,cedula,fecha_nacimiento) VALUES ('".$_REQUEST['nombre']."','".$_REQUEST['cedula']."','".$_REQUEST['fn']."')";
$resultado = $mysqli->query($query);
if($resultado){
	$respuesta['ejecuto'] = true;
	$respuesta['id'] = $mysqli->insert_id;
}else{
	$respuesta['ejecuto'] = false;
	$respuesta['msg'] = $mysqli->error;
}
echo json_encode($respuesta);
?>