


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
    <link rel="stylesheet" type="text/css" href="css/estilos_seleccion_parkings.css">
</head>
<body>
<div id="total">
    <div class="jumbotron text-center rounded-0">
        <div class="container">
            <h1>ENDIBLOG</h1>
            <p>Alea jacta est</p>
        </div>
    </div>
    <div id="central" class="col-12">
                <h2>SELECCIONA EL PARKING</h2><br>
                <form action="//localhost/projecto/inicio_sesion.php" method="post">
                <div class="row">
  <div class="container-fluid col-4">
    <div class="form-group">
      <select class="selectpicker form-control">
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
            
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
      integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="js//jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>

<?php

			}
		}
 ?>