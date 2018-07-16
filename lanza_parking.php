<?php


/*function ValidarUrl($url) {

 //fsockopen -> Abre una conexión de sockets de dominio de Internet

 //resource fsockopen ( string destino, int puerto [, int errno [, string errstr [, float tiempo_espera]]])

 $validar = @fsockopen($url, 80, $errno, $errstr, 15);

 if ($validar) {

  fclose($validar);

  return true;

 }else

  return false;

}*/

if(isset($_POST["nombre"])){
	$parking=$_POST["nombre"];
	header("location:http://localhost/projecto/".$parking.".php");
}
	
?>