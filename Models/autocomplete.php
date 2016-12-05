<?php 

	$cedula = $_GET['term'];
	 
	$conexion = new mysqli('localhost','root','mdb*4rk4m_r007','db_suite');
	 
	$consulta = "SELECT cedula FROM ts_persona WHERE cedula LIKE '%$cedula%'";
	 
	$result = $conexion->query($consulta);
	 
	if($result->num_rows > 0){
	    while($fila = $result->fetch_array()){
	        $cedula[] = $fila['cedula'];
	    }
	echo json_encode($cedula);
	}

?>