<?php

if(isset($_GET["distancia0"]) && isset($_GET["distancia1"]) && isset($_GET["distancia2"])) {
    $distancia0 = $_GET["distancia0"];
    $distancia1 = $_GET["distancia1"];
    $distancia2 = $_GET["distancia2"];
    if ($distancia0 < 40) {
        $mysqli = new mysqli('localhost', 'parking', 'parking', 'parking');
        $query = "UPDATE plazas SET modo_plaza = '1' WHERE plazas.id_plaza = 1 AND plazas.id_parking = 1";
        $res = $mysqli->query($query);
        echo "si";
    } else {
        $mysqli = new mysqli('localhost', 'parking', 'parking', 'parking');
        $query = "UPDATE plazas SET modo_plaza = '0' WHERE plazas.id_plaza = 1 AND plazas.id_parking = 1";
        $res = $mysqli->query($query);
    }
    if ($distancia1 < 40) {
        $mysqli = new mysqli('localhost', 'parking', 'parking', 'parking');
        $query = "UPDATE plazas SET modo_plaza = '1' WHERE plazas.id_plaza = 2 AND plazas.id_parking = 1";
        $res = $mysqli->query($query);
        echo "si";
    } else {
        $mysqli = new mysqli('localhost', 'parking', 'parking', 'parking');
        $query = "UPDATE plazas SET modo_plaza = '0' WHERE plazas.id_plaza = 2 AND plazas.id_parking = 1";
        $res = $mysqli->query($query);
    }
    if ($distancia2 < 40) {
        $mysqli = new mysqli('localhost', 'parking', 'parking', 'parking');
        $query = "UPDATE plazas SET modo_plaza = '1' WHERE plazas.id_plaza = 3 AND plazas.id_parking = 1";
        $res = $mysqli->query($query);
        echo "si";
    } else {
        $mysqli = new mysqli('localhost', 'parking', 'parking', 'parking');
        $query = "UPDATE plazas SET modo_plaza = '0' WHERE plazas.id_plaza = 3 AND plazas.id_parking = 1";
        $res = $mysqli->query($query);
    }
}
?>