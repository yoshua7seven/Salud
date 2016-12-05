<?php namespace Models;

 	class Solicitud
	{
		private $id;
		private $id_persona;
		private $cedula_persona;

		private $tiposolicitud;
		private $estatussolicitud;
		private $informe;
		private $copiacedula;
		private $presupuesto;

		private $remitida;
		private $motivosolicitud;
		private $descripcion;
		private $fecha;
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
			$sql = "SELECT * FROM ts_solicitud ORDER BY fecha DESC";
			$datos = $this->con->consultaReturn($sql);
			return $datos;
		}

		public function tipo_solicitud(){
			$sql = "SELECT * FROM ts_tipo_solicitud ORDER BY nombre ASC";
			$datos = $this->con->consultaReturn($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO ts_solicitud(id, id_persona, nombre_persona, apellido_persona, cedula_persona, tipo, estatus, fecha, remitida, motivo_nota,informe_recipe, copia_cedula, presupuesto, descripcion)
					VALUES (null, '{$this->id_persona}','{$this->nombre_persona}','{$this->apellido_persona}','{$this->cedula_persona}','{$this->tipo}','{$this->estatus}', NOW(), '{$this->remitida}', '{$this->motivo_nota}', '{$this->informe_recipe}', '{$this->copia_cedula}', '{$this->presupuesto}', '{$this->descripcion}' ";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM ts_solicitud WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}
		
		public function update(){
			$sql = "UPDATE estudiantes SET  nombre = '{$this->nombre}',edad = '{$this->edad}',promedio = '{$this->promedio}',seccion_id = '{$this->seccion_id}' WHERE id ='{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM ts_solicitud WHERE id = '{$this->id}'";
			$datos = $this->con->consultaReturn($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

		public function auto_query($cedula1){
			$sql = "SELECT cedula FROM ts_persona WHERE cedula LIKE '%$cedula1%'";
			$datos = $this->con->consultaReturn($sql);
				if ($datos->num_rows > 0) {
					while ($rows = $datos->fetch_array()) {
						$cedula1 = $rows['cedula'];
					}
					return $cedula1;
				}else{
					return false;
				}
		}

		public function auto_datos($cedula){
			$sql = "SELECT p_nombre, p_apellido, cedula FROM ts_persona WHERE cedula = '$cedula'";
			$datos = $this->con->consultaReturn($sql);
			$respuesta = new \stdClass();
				if ($datos->num_rows > 0) {
					$row = $datos->fetch_array();
					$respuesta->nombre = $row['p_nombre'];
					$respuesta->apellido = $row['p_apellido'];
					$respuesta->cedula = $row['cedula'];
					
					return $respuesta;
				}else{
					return false;
				}
		}
	}


?>