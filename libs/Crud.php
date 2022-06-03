<?php
require '../libs/Database.php';

class Crud {
	public $tabla;
	//Consultar
	public function consultar($parametros){
		$query = "	SELECT 
						* 
					FROM 
						$this->tabla";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}
	//Insertar
	public function insertar($parametros){
		$query_new = '';
		$query = "INSERT INTO 
						$this->tabla
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
	//Actualizar
	public function actualizar($parametros){
		$query_new = '';
		$query = "	UPDATE 
						$this->tabla
        			SET ";
        foreach ($parametros as $key => $value) {
			$query .= "$key= '$value',"; 
		}
		for ($i=0; $i <strlen($query)-1; $i++) { 
			$query_new .= $query[$i];
		}
        $query_new .= "WHERE id = $parametros[id]";
        $db = new Database();
		return $db->ejecutarConsulta($query_new);
	}
	//Eliminar
	public function eliminar($parametros){
		$query = "	DELETE FROM 
						$this->tabla
					WHERE 
						id = $parametros[id]";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}
}