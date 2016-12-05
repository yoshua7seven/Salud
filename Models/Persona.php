<?php namespace Models;

 	class Persona
	{
		private $id;
		private $codigo;
		private $nombre1;
		private $nombre2;
		private $apellido1;
		private $apellido2;
		private $cedula;
		private $direccion;
		private $telefono;
		private $correo;
		private $zona;
		private $con;
		
		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atribb,$value){
			$this->$atribb = $value;
		}

		public function get($atribb){
			return $this->$atribb;
		}

		public function list(){
			$sql = "SELECT t1.*,t2.nombre AS zona_nombre FROM ts_persona t1 INNER JOIN ts_zonas t2 ON t1.id_zona = t2.id";
			$datos = $this->con->consultaReturn($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO ts_persona(id,p_nombre,s_nombre,p_apellido,s_apellido,cedula,direccion,telefono,correo,fecha_reg,estado,id_zona,codigo) VALUES (null,'{$this->nombre1}','{$this->nombre2}','{$this->apellido1}','{$this->apellido2}','{$this->cedula}','{$this->direccion}','{$this->telefono}','{$this->correo}',NOW(),1,'{$this->zona}','{$this->generarCodigo()}')";
			$this->con->consultaSimple($sql);

		}

		public function delete(){
			$sql = "UPDATE ts_persona SET estado = 0 WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}
		
		public function update(){
			$sql = "UPDATE ts_persona SET  p_nombre = '{$this->nombre1}',
											s_nombre = '{$this->nombre2}',
											p_apellido = '{$this->apellido1}',
											s_apellido = '{$this->apellido2}',
											cedula = '{$this->cedula}',
											direccion = '{$this->direccion}',
											telefono = '{$this->telefono}',
											correo = '{$this->correo}',
											id_zona = '{$this->zona}',
										WHERE id ='{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM ts_persona WHERE codigo = '{$this->codigo}'";
			$datos = $this->con->consultaReturn($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

		private function generarCodigo($longitud = 10) {
 			$key = '';
 			$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 			$max = strlen($pattern)-1;
 			for($i=0;$i < $longitud;$i++){
 				$key .= $pattern{mt_rand(0,$max)}; 
 			}
 			return $key;
		}


		public function very($tabla, $atributo,$valor){
			$sql = "SELECT * FROM `{$tabla}` WHERE {$atributo} = {$valor} ";
			echo $sql;
			if ($this->con->consulta_very($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function search($tabla, $atributo,$valor){
			$sql = "SELECT * FROM '{$tabla}' WHERE '{$atributo}' LIKE '{$valor}' ORDER BY '{$atributo}' ASC ";
			if (!$datos = $this->con->consultaReturn($sql)) {
				return false;
			}else{
				return $datos;
			}
		}

	}
?>