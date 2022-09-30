<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
    $ci=$_POST['ci'];
    $telefono=$_POST['telefono'];
    $direccion = strtoupper($_POST['direccion']);


    // Updaste User details
    $query = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', ci = '$ci', direccion='$direccion', telefono='$telefono' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}