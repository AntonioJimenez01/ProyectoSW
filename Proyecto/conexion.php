<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "joseuriel";
$dbname = "usuarios";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>