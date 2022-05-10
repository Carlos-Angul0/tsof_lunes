<?php
require '../libs/Database.php';

class Personas{
	public function consultar($parametros){
		$query = "SELECT * FROM personas";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}

	public function insertar($parametros){
		$query = "INSERT INTO personas (nombre,altura,cedula,fecha_nacimiento) 
				VALUES ('".$parametros['nombre']."','".$parametros['altura']."','".$parametros['cedula']."','".$parametros['fn']."')";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}
}