<?php

class Database extends mysqli {
	private $HOST = 'localhost';
	private $USER = 'root';
	private $PASS = '';
	private $DB = 'proyecto';

	public function __construct(){
		parent::__construct($this->HOST,$this->USER,$this->PASS,$this->DB);
		if($this->connect_errno != 0){
			die('Error de conexión ('.$this->connect_errno.')'.$this->connect_error);
			exit;
		}
	}

	public function ejecutarConsulta($query){
		$respuesta = [];
		$resultado = $this->query($query);
		if(is_object($resultado)){
			$respuesta['ejecuto'] = true;
			$respuesta['registros'] = [];
			while($registro = $resultado->fetch_array(MYSQLI_ASSOC)){
				array_push($respuesta['registros'],$registro);
			}
		}elseif($resultado == true){
			$respuesta['ejecuto'] = true;
			$respuesta['id'] = $this->insert_id;
		}else{
			$respuesta['ejecuto'] = false;
			$respuesta['error'] = $this->error;
		}
		return $respuesta;
	}
}