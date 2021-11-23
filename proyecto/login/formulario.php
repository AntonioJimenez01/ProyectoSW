<?php

include("conexion.php");
$id = $_POST["id"];
$pregunta = $_POST["pregunta"];
$respuestaD   = $_POST["respuestaD"];

if(isset($_POST["btnGuardar"]))
{
	$sqlgrabar = "INSERT INTO preguntas(id,pregunta,respuestaD) values ('$id','$pregunta','$respuestaD')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Pregunta guardada con exito: $nombre'); window.location='formulario.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
}


?>
