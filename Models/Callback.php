<?php namespace Models;

	class Callback
	{
		private $con;
		
		public function __construct(){
			$this->con = new Conexion();
		}

		public function very($table,$field,$value){
			$sql = "SELECT * FROM '{$table}' WHERE '{$field}' = '{$value}' ";
			if (!mysqli_fetch_assoc($this->con->consultaReturn($sql))) {
				return FAlSE;
			}else{
				return TRUE;
			}
		}
	}

?>