<?php
require '../libs/Crud.php';

class Usuarios extends Crud{
	public $tabla = "usuarios";

	public function autenticar($parametros){
		$query = "SELECT 
					*
				FROM
					usuarios
				WHERE
					correo = '$parametros[correo]'
					AND password = '$parametros[password]'";
		$db = new Database();
		return $db->ejecutarConsulta($query);
	}
}