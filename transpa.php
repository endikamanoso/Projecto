<?php
$ancho = (isset($_GET["ancho"])) ? $_GET["ancho"] : 1;
$alto = (isset($_GET["alto"])) ? $_GET["alto"] : 1;

$imagen = imagecreate($ancho, $alto);

$transpa = imagecolorallocate($imagen, 255, 255, 255);
imagecolortransparent($imagen, $transpa);
imagefill($imagen, 0, 0, $transpa);

header("Content-type: image/gif");
imagegif($imagen);
imagedestroy($imagen);
?> 