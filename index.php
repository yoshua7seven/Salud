<?php
	/*usaremos DS para ayudarnos en las URL amigables*/
	define('DS',DIRECTORY_SEPARATOR);
	/*
		ROOTcontiene la ruta raiz de nuestro proyecto
		se utilizara paragenerar enlaces y llamar archivos
	*/
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://localhost/salud/");
	
	require_once "Config/Autoload.php";
	Config\Autoload::Run();
	require_once "Views/template/template.php";
	Config\Enrutador::run(new Config\Request());

	
	/*********************************************
	$est = new Models\Estudiante();
	$est->set("id",1);
	$datos = $est->view();
	$datos['seccion_nombre'];
	*********************************************/	
	
	/*********************************************
	verifica si se tiene la extencion mysqli activa
	if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    	echo 'We don\'t have mysqli!!!';
	} else {
    	echo 'Phew we have it!';
	}
	*********************************************/
?>