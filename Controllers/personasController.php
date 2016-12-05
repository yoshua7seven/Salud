<?php namespace Controllers;
	
	use Models\Persona as Persona;
	use Models\Zona as Zona;
	
	class personasController
	{
		private $personas;
		private $zonas;

		public function __construct()
		{
			$this->personas = new Persona();
			$this->zonas = new Zona();
		}
		
		public function index(){
			$datos = $this->personas->list();
            return $datos; 
		}
		/*
		zona debe ser de un rango igual al de la cantidad de zonas
		*/
		public function registrar(){
			if ($_POST) {

				if ($this->very_cedula() && $this->very_int_cedula()) {
					$this->personas->set("cedula",$_POST['cedula']);
					$this->personas->set("zona",$_POST['zona']);

					$this->personas->set("nombre1",$_POST['nombre1']);
					$this->personas->set("nombre2",$_POST['nombre2']);
					$this->personas->set("apellido1",$_POST['apellido1']);
					$this->personas->set("apellido2",$_POST['apellido2']);
					$this->personas->set("direccion",$_POST['direccion']);
					$this->personas->set("telefono",$_POST['telefono']);
					$this->personas->set("correo",$_POST['correo']);
					$this->personas->add();
					header("Location:" . URL . "personas");
				}
				
			}else{
				$datos = $this->zonas->list();
				return $datos;
			}
		}

		public function detalles($arg){
			$this->personas->set("codigo",$arg);
			$datos = $this->personas->view();
			$this->zonas->set("id",$datos['id_zona']);
			$zona = $this->zonas->view();
			$datos['id_zona'] = $zona['nombre'];
			return $datos;
		}

		private function very_zona($zona,$total){
			if ($zona >= 1 && $zona <= $total) {
				return true;
			}else{
				return false;
			}
		}

		private function very_int_cedula(){
			if (is_numeric($_POST['cedula']) && $_POST['cedula'] > 5000000 && $_POST['cedula'] < 30000000) {
				return true;
			}else{
				echo '<div class="content-wrapper btn-danger">Ingrese un numero de cedula valido, debe ser numerico mayor a 5.000.000 y menor que 30.000.000, verifiquela</div>';
				return false;
			}
		}

		private function very_cedula(){
			if ($this->personas->very("ts_persona", "cedula",$_POST['cedula'])) {
			 	echo '<div class="content-wrapper btn-danger">La cedula ya esta registrada, verifiquela</div>';
			 	return false; //cuando es false significa que no se puede registrar porque la cedula ya existe
			 }else{
			 	return true; //cedula no registrada, registro disponible
			 } 
		}


		
	}
/*
is_numeric()
if (isset($_GET['aid']) && is_numeric($_GET['aid'])) {
    $aid = (int) $_GET['aid'];
} else {
    $aid = 1;
}

*/
?>