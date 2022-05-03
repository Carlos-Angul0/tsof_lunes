<?php
$respuesta = [];
$mysqli = new mysqli("localhost", "root", "", "proyecto1");
if($mysqli->connect_error){
	die('Error de conexión ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$query = "UPDATE personas 
        SET nombre = '".$_REQUEST['nombre']."',
            cedula = '".$_REQUEST['cedula']."',
            fecha_nacimiento = '".$_REQUEST['fn']."'
        WHERE id = ".$_REQUEST['id'];
$resultado = $mysqli->query($query);
if($resultado){
	$respuesta['ejecuto'] = true;
	$respuesta['id'] = $mysqli->insert_id;
}else{
	$respuesta['ejecuto'] = false;
}
echo json_encode($respuesta);
?>