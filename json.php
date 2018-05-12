<?php
header('Content-Type: application/json');       //CABECERA DEL JSON

$mysqli= new mysqli('localhost','parking','parking','parking'); //CONSULTA
$query="select id_plaza,modo_plaza
                from parking.plazas
                WHERE id_parking=1";

$resultado=$mysqli->query($query);  //LAS FILAS DE LA CONSULTA LAS GUARDA EN $resultado
echo '{"plazas":{"plaza":[';        //CREO FILA NUEVA EN EL JSON
$fila=$resultado->fetch_assoc();    //METE LA PRIMERA FILA EN $fila
while ($fila){                      //MIENTRAS TENGA VALOR $fila, REALIZARÁ EL BUCLE
    $id_plaza=$fila["id_plaza"];    //LOS VALORES DE ID_PLAZA Y MODO_PLAZA
    $modo_plaza=$fila["modo_plaza"];//DE ESA FILA FILA LOS METO EN VARIABLES
    echo '{"id_plaza":"'.$id_plaza.'","modo_plaza":"'.$modo_plaza.'"}'; //METO VALORES EN LA FILA DEL JSON
    $fila=$resultado->fetch_assoc();    //METO LA SIGUIENTE FILA
    if ($fila){                         //SI TIENE VALOR $fila, INTRODUCE
        echo ',';                       //EN EL JSON UNA COMA PARA METER LA SIGUIENTE PLAZA
    }
}

echo ']';                               //SI NO TIENE VALOR $fila, CIERRO EL CONTINENTE DE LAS PLAZAS CON ']'
echo '}';                               //
echo '}';                               //CIERRO EL JSON


?>