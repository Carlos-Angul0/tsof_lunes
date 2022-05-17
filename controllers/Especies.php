<?php
require '../libs/Database.php';

class Especies{
	public function consultar($parametros){
		$query = "SELECT * FROM especies";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}

	public function insertar($parametros){
		$query = "INSERT INTO especies (nombre) 
				VALUES ('".$parametros['nombre']."')";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}

	public function actualizar($parametros){
		$query = "	UPDATE 
						especies 
        			SET 
        				nombre = '$parametros[nombre]'
        			WHERE 
        				id = $parametros[id]";
        $db = new Database();
		return $db->ejecutarConsulta($query);
	}

	public function eliminar($parametros){
		$query = "	DELETE FROM 
						especies 
					WHERE 
						id = $parametros[id]";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}
}