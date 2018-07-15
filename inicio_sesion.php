<?php
/**
 * Created by PhpStorm.
 * User: Endika
 * Date: 09/07/2018
 * Time: 10:35
 */
if (isset($_POST["login"]) && isset($_POST["pass"])){
    $login=$_POST["login"];
    $password=$_POST["pass"];
    $correcto="";

    $mysqli= new mysqli("localhost","parking","parking","parking");
    if ($mysqli->connect_error) {
        echo "error en la conexion";
    }
    else {

        $query = "select COUNT(*) AS numero
                from parking.usuarios
                WHERE login='$login' AND password='$password'";
        $resultado = $mysqli->query($query);
        if ($resultado) {
            $fila=$resultado->fetch_assoc();
            if ($fila['numero']>0) {
                $correcto=1;
                $mysqli->close();
            }
        }
        else echo "no hay resultado .".$mysqli->error."nº".$mysqli->errno;
        if ($correcto==1){
            header("location:http://localhost/projecto/seleccion_parkings.php");
        }
        else     header("location:http://169.254.89.30:3000/index.html");
    }
}

?>