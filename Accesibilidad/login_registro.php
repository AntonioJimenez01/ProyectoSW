<?php

include("conexion.php");

$nombre = $_POST["user"];
$pass   = $_POST["pass"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM users WHERE usuario = '$nombre' AND pass='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $nombre'); window.location='principal.html' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='inicio.html' </script>";
	}
}

//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO users(usuario,pass) values ('$nombre','$pass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='inicio.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
}


?>
