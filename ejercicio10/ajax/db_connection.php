<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "db_usuarios"; // MySQL Database name

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}

?>