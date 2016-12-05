<?php namespace Models;

	class Conexion
	{
		private $datos = array(
			'host' => "localhost",
			'user' => "root",
			'pass' => "mdb*4rk4m_r007",
			'db' => "db_suite"
		);
		private $con;
		
		public function __construct(){
			//a las clases globales como mysqli se les debe colocar "\" invertido para que no sean tomadas como una clases hecha por el programador.
			//con esto seran omitidas
			$this->con = new \mysqli($this->datos['host'], $this->datos['user'], $this->datos['pass'], $this->datos['db']);
			$this->con->set_charset('utf8');
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaReturn($sql){
			$datos = $this->con->query($sql);
			return $datos;
		}
		
		public function consulta_very($sql){
			if ($response = $this->con->query($sql)) {
				
				if ($response->num_rows > 0) {
					return true;
				}else{
					return false;
				}	
			}
		}
	}
 

?>