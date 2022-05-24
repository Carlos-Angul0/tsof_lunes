<?php
require '../libs/Crud.php';

class Usuarios extends Crud{
	public $tabla = "usuarios";

	public function autenticar($parametros){
		$respuesta = [];
		$query = "SELECT 
					*
				FROM
					usuarios
				WHERE
					correo = '$parametros[correo]'
					AND password = '$parametros[password]'";
		$db = new Database();
		$resultado = $db->ejecutarConsulta($query);
		if(count($resultado['registros']) == 0){
			$respuesta['ejecuto'] = false;
			$respuesta['error'] = 'Credenciales erroneas';
		}else{
			$_SESSION['correo'] = $parametros['correo'];
			$_SESSION['password'] = $parametros['password'];
			$respuesta['ejecuto'] = true;
		}
		return $respuesta;
	}
}