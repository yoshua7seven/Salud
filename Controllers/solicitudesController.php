<?php namespace Controllers;
	
	use Models\Persona as Persona;
	use Models\Callback as Callback;
	use Models\Solicitud as Solicitud;
	
	class solicitudesController
	{
		private $personas;
		private $callback;
		private $solicitudes;

		public function __construct()
		{
			$this->personas = new Persona();
			$this->callback = new Callback();
			$this->solicitudes = new Solicitud();
		}
		
		public function index(){
			$datos = $this->solicitudes->list();
			return $datos;

		}

		public function crear(){
			if ($_POST) {
				echo "si hay un post - isset post";
				if ($this->tipo_solicitud($_POST['tiposolicitud']) && $this->check($_POST['copiacedula']) && $this->check($_POST['informe']) && $this->numeric($_POST['presupuesto']) && $this->numeric($_POST['cedula'])  ) {
					$this->solicitudes->set('tiposolicitud',$_POST['tiposolicitud']);
					$this->solicitudes->set('copiacedula',$_POST['copiacedula']);
					$this->solicitudes->set('informe',$_POST['informe']);
					$this->solicitudes->set('presupuesto',$_POST['presupuesto']);

					$this->solicitudes->set('remitida',$_POST['remitida']);
					$this->solicitudes->set('estatussolicitud',$_POST['estatussolicitud']);
					$this->solicitudes->set('motivosolicitud',$_POST['motivosolicitud']);
					$this->solicitudes->set('desc-equip',$_POST['desc-equip']);
					echo "<h1>LISTO</h1>";
					/*$this->personas->add();*/
				}else{
					header("Location:" . URL . "solicitudes");
				}
				
			}else{
				$datos = $this->solicitudes->tipo_solicitud();
				return $datos;
				
			}
			
		}

		private function tipo_solicitud($tipo){
			if ($tipo >= 1 || $tipo <= 5) {
				return true;
			}else{
				echo '<div class="content-wrapper btn-danger">el tipo de solicitudno es valida, intenta denuevo</div>';
				return false;
			}
		}

		private function check($var){
			switch ($var) {
				case 'on':
					return true;
					break;

				case 'off':
					return true;
					break;
				
				default:
					echo '<div class="content-wrapper btn-danger">la opcion:' . $var . ', no es valida para el check, intente denuevo</div>';
					return false;
					break;
			}
		}

		private function numeric($var){
			if (is_numeric($var)) {
				return true;
			}else{
				echo '<div class="content-wrapper btn-danger">debe ser numerico:' . $var . ', verifiquela</div>';
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

		public function buscarcedula(){
			$cedula = $_GET['term'];
			if ($cedu = $this->solicitudes->auto_query($cedula)) {
				 echo json_encode($cedu); 
			}else{
				echo '<div class="content-wrapper btn-danger">no hubo coincidencias, la cedula no existe</div>';
			}

		}

		public function buscardatos(){
			$cedula = $_POST['cedula'];
			if ($respuesta = $this->solicitudes->auto_datos($cedula)) {
				echo json_encode($respuesta);
			}else{
				echo '<div class="content-wrapper btn-danger">no hubo coincidencias, la cedula no existe</div>';
			}

		}
	}
   
?>