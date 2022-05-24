<?php

class Sesiones{
	public function obtenerSesion($parametros){
		return [
			'ejecuto'=>true,
			'datos'=>$_SESSION
		];
	}

	public function destruir($parametros){
		session_destroy();
		return [
			'ejecuto'=>true
		];
	}
}