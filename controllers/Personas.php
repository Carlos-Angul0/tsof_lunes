<?php
require '../libs/Database.php';

class Personas{
	public function consultar($parametros){
		$query = "SELECT * FROM personas";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}

	public function insertar($parametros){
		$query_new = '';
		$query = "INSERT INTO 
						personas
					SET ";
		foreach ($parametros as $key => $value) {
			$query .= "$key= '$value',"; 
		}
		for ($i=0; $i <strlen($query)-1; $i++) { 
			$query_new .= $query[$i];
		}
		$db = new Database();
		return $db->ejecutarConsulta($query_new);
	}

	public function actualizar($parametros){
		$query = "	UPDATE 
						personas 
        			SET 
        				nombre = '$parametros[nombre]',
            			cedula = $parametros[cedula],
            			altura = $parametros[altura],
            			fecha_nacimiento = '$parametros[fn]'
        			WHERE 
        				id = $parametros[id]";
        $db = new Database();
		return $db->ejecutarConsulta($query);
	}

	public function eliminar($parametros){
		$query = "	DELETE FROM 
						personas 
					WHERE 
						id = $parametros[id]";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}
}