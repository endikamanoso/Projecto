<?php
function rgbColor($fondo)	{
	$red = (int) hexdec(substr($fondo, 0, 2));
	$green = (int) hexdec(substr($fondo, 2, 2));
	$blue = (int) hexdec(substr($fondo, 4, 2));
	return array($red, $green, $blue);
}

$ancho = $_GET["ancho"];
if (isset($ancho))
	$ancho = $_GET["ancho"];
else
	$ancho = 200;

$alto = $_GET["alto"];
if (isset($alto))
	$alto = $_GET["alto"];
else
	$alto = 200;

$coors = $_GET["coors"];
if (isset($coors))	{
	$coordes = explode(",", $coors);
	$diam = $coordes[2] * 2;
	}
else	{
	$coordes = array(0, 0, $ancho, $alto, 0, $alto);
	$diam = $coordes[2] * 2;
}
$puntos = count($coordes) / 2;


$imagen = imagecreate($ancho, $alto);
$shape = $_GET["shape"];
if (!isset($shape))
	$shape = "rect";

//$negro = imagecolorallocate($copia, 0, 0, 0);
$transpa = imagecolorallocate($imagen, 254, 254, 254);

imagefill($imagen, 0, 0, $transpa);
imagecolortransparent($imagen, $transpa);

$borde = $_GET["borde"];
if (isset($borde))	{
	$conBorde = true;
	$rgbBorde = rgbColor($borde);
	$_br = (int) $rgbBorde[0];
	$_bg = (int) $rgbBorde[1];
	$_bb = (int) $rgbBorde[2];
	$_borde = imagecolorallocate($imagen, $_br, $_bg, $_bb);
}
else
	$conBorde = false;

$relleno = $_GET["relleno"];
if (isset($relleno))	{
	$conRelleno = true;
	$rgbRelleno = rgbColor($relleno);
	$_rr = (int) $rgbRelleno[0];
	$_rg = (int) $rgbRelleno[1];
	$_rb = (int) $rgbRelleno[2];
	$_relleno = imagecolorallocate($imagen, $_rr, $_rg, $_rb);
}
else
	$conRelleno = false;

switch($shape)	{
	case "circle":
	if ($conRelleno)
	imagefilledellipse($imagen, $coordes[0], $coordes[1], $diam, $diam, $_relleno);
	if ($conBorde)
	imageellipse($imagen, $coordes[0], $coordes[1], $diam, $diam, $_borde);
	break;
	case "poly":
	if ($conRelleno)
	imagefilledpolygon($imagen, $coordes, $puntos, $_relleno);
	if ($conBorde)
	imagepolygon($imagen, $coordes, $puntos, $_borde);
	break;
	default:
	if ($conRelleno)
	imagefilledrectangle($imagen, $coordes[0], $coordes[1], $coordes[2], $coordes[3], $_relleno);
	if ($conBorde)
	imagerectangle($imagen, $coordes[0], $coordes[1], $coordes[2], $coordes[3], $_borde);
	break;
}



header("Content-type: image/png");
imagepng($imagen);

imagedestroy($imagen);

?> 