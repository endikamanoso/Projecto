<?php

if(isset($_GET["nombre"])){
	$parking=$_GET["nombre"];
	echo "hola";
	header("location:http://localhost/projecto/".$parking.".html");
}


	?>