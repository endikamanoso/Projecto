<?php
header('Content-Type: application/json');

$mysqli= new mysqli('localhost','parking','parking','parking');
$query="select id_plaza,modo_plaza
                from parking.plazas
                WHERE id_parking=1";

$resultado=$mysqli->query($query);
echo '{"plazas":{"plaza":[';
$fila=$resultado->fetch_assoc();
while ($fila){
    $id_plaza=$fila["id_plaza"];
    $modo_plaza=$fila["modo_plaza"];
    echo '{"id_plaza":"'.$id_plaza.'","modo_plaza":"'.$modo_plaza.'"}';
    $fila=$resultado->fetch_assoc();
    if ($fila){
        echo ',';
    }
}

echo ']';
echo '}';
echo '}';


?>