<?php namespace Config;

//en un framework esta clase se llamaria bootstraps
class Enrutador
{
	
	public static function run(Request $request){
		$controller = $request->getController()."Controller";
		/*debug
		echo "controlador capturado en el Enrutador:".$controller."<-";
			echo "<br>";
		*/
		$routeController = ROOT."Controllers".DS.$controller.".php";
		$method = $request->getMethod();
		$argument = $request->getArgument();
		
		if (is_readable($routeController)) {
			require_once $routeController;
			$class = "Controllers\\".$controller;
			$controller = new $class;
			
			/*debug
			echo "metodo capturado en el Enrutador:".$method."<-";
			echo "<br>";
			echo "argumento capturado en el Enrutador:".$argument."<-";
			echo "<br>";
			*/
			if (!isset($argument)) {
				$datos = call_user_func(array($controller,$method));
			}else{
				$datos = call_user_func_array(array($controller, $method), array($argument));
			}

			//call_user_func(function);
			//call_user_func_array(function, param_arr);
		}
		//cargar vistas
		$routeView = ROOT . "Views". DS . $request->getController(). DS . $request->getMethod().".php";
		if (is_readable($routeView)) {
			require_once $routeView;
		}else{
			echo '<div class="content-wrapper btn-info" >estas tratando de entrar a un sitio que no existe, regresa al inicio.</div>';
			/*echo '<div class="content-wrapper btn-danger">
no se encontro la ruta de la vista en el enrutador.<br>la vista para este metodo puede aun no estar creada, revisa la carpeta/Views/'.$method.'.php<br>y verifica si existe la vista.</div>';*/
			
		}
	}
}

?>