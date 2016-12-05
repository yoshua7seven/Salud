<?php namespace Config;
	/*explode divide la cadena de text, basandose en el delimitadorpasado por parametro*/
	/*array_shift extraera el primer elemento del array que se le pase por parametro*/
	class Request
	{	
		private $controller;
		private $method;
		private $argument;

		public function __construct(){

			if (isset($_GET['url'])) {
				$route = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL);
				$route = explode("/", $route);
				$route = array_filter($route);

				
				$this->controller = strtolower(array_shift($route));

				$this->method = strtolower(array_shift($route));
				
				if (!$this->method) {
					$this->method = "index";//si no se pasa un metodo por la url, se establece el metodo index
				}
				$this->argument = strtolower(array_shift($route));
			}else{

				$this->controller = "personas";//si no se pasa un controlador por la url, se establece el controlador por defecto
				$this->method = "index";//si no se pasa un metodo por la url, se establece el metodo index
			}
			
			/*
			print_r($_GET);
			echo "<br>";
			echo "controller:".$this->controller."<-";
			echo "<br>";
			echo "method:".$this->method."<-";
			echo "<br>";
			echo "argument:".$this->argument."<-";
			echo "<br>";
			*/
		}

		public function getController(){
			return $this->controller;
		}
		
		public function getMethod(){
			return $this->method;
		}

		public function getArgument(){
			return $this->argument;
		}
	}

?>