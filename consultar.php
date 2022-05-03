<?php
$respuesta = [];
$mysqli = new mysqli("localhost", "root", "", "proyecto1");
if($mysqli->connect_error){
	die('Error de conexión ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$resultado = $mysqli->query("SELECT * FROM personas");
if($resultado == false){
	$respuesta['ejecuto'] = false;
	$respuesta['msg'] = $mysqli->error;
}else{
	$respuesta['ejecuto'] = true;
	$respuesta['registros'] = [];
	while($registro = $resultado->fetch_array(MYSQLI_ASSOC)){
		array_push($respuesta['registros'],$registro);
	}
}
echo json_encode($respuesta);
?>