


<?php
	$mysqli=new mysqli('localhost','parking','parking','parking');
	if ($mysqli->connect_error) {
        echo "error en la conexion";
    }
    else{
		$query="select nombre from parkings";
		$resultado=$mysqli->query($query);
		if (!$resultado) {
			header("location:http://localhost/conexion_perdida.php");
		}
		else {
?>
	<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Proyecto Endika</title>
    <link rel="stylesheet" type="text/css" href="css/prueba.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container-fluid" id="central">
    <div id="titulo" class="row text-center">
        <h1>MIPARK</h1>
        <p>SELECCIONA EL PARKING</p>
    </div>
    <br><br>
    <div class="col-12 text-center">
        <form class="form-signin" action="http://localhost/projecto/lanza_parking.php" method="post">
  <div class="container-fluid col-4">
    <div class="form-group">
      <select class="selectpicker form-control" name="nombre" id="nombre_parking">
        <option selected="true" disabled="disabled">Escoja un parking</option>


<?php
			$fila=$resultado->fetch_assoc();
			while($fila){
				$nombre=$fila["nombre"];
?>
	<option value="<?php echo $nombre;?>"><?php echo $nombre;?></option> //POR CADA PARKING CREA UN OPTION
<?php
				$fila=$resultado->fetch_assoc();
				}
?>
</select>
    </div>
  </div>
</div>
          <br><br>
             <button id="validar_sesion" class="btn btn-lg btn-primary col-4">Validar</button>
                    <br><br>
                </form>
            </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>

<?php

			}
		}
 ?>