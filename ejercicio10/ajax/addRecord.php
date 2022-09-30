<?php
	if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['ci'])  && isset($_POST['telefono']) && isset($_POST['direccion']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
//		$id = $_POST['id'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
    	$ci=$_POST['ci'];
    	$telefono=$_POST['telefono'];
    	$direccion = strtoupper($_POST['direccion']);

		$query = "INSERT INTO usuario(nombre, apellido, ci, telefono, direccion) VALUES('$nombre', '$apellido', '$ci','$telefono', '$direccion' )";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "Registro agregado correctamente";
	}
?>