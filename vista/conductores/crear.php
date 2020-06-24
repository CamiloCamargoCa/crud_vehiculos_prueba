<?php 

	include '../../controlador/vehiculosController.php';

	$obj = new VehiculoController();
	$row1 = $obj->listarVehiculos('');
	
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crud Vehiculos</title>
	<link href="../../bootstrap-4.5.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script src="../../bootstrap-4.5.0/js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="../../bootstrap-4.5.0/js/bootstrap.min.js" type="text/javascript"></script>
	<style>
	table{
		text-align: center;
	}
	a{
		font-size: 20px;
		font-family: arial;
		color: blue;
		font-weight: bold;
		padding-top: 10%;
	}
	form{
		border:1px solid blue;
		padding: 50px;
		border-radius: 2px;
		box-shadow: 1px 1px 5px 5px grey;
	}
	</style>
</head>
<body>

	<div class="container">
		<br>
		<div class="row">
			<div class="col-12 col-sm-2">
				<a href="conductores.php" class="btn btn-primary">Atras</a>
			</div>
			<div class="col-12 col-sm-6">
				<center><h3>Crear Conductor</h3></center>
			</div>
			<!-- <div class="col-12 col-sm-4">
				<a href="crear.php" class="btn btn-success">Registar</a>
			</div> -->
		</div>
		<br>
		<form action="opeCrear.php" method="post">

			<div class="form-group">
			  <label class="col-form-label col-form-label-sm" for="inputSmall">Identificacion</label>
			  <input class="form-control form-control-sm" type="text" name="identificacion" id="placa" placeholder="">
			</div>

			<div class="form-group">
			  <label class="col-form-label col-form-label-sm" for="inputSmall">nombre</label>
			  <input class="form-control form-control-sm" type="text" name="nombre" id="marca" placeholder="">
			</div>

			<div class="form-group">
			  <label class="col-form-label col-form-label-sm" for="inputSmall">Estado</label>
			  <select name="estado" class="form-control">
			  	<option value="Nuevo">Nuevo</option>
			  	<option value="Usado">Usado</option>
			  	<option value="Renovado">Renovado</option>
			  </select>
			</div>

			<div class="form-group">
		      <label for="exampleSelect2">Vehiculos</label>
		      <select class="js-example-basic-multiple form-control" id="" name="vehiculo_id">
		        <?php 
		        	while ($row = mysqli_fetch_array($row1)) {
		        		echo '<option value="'.$row['id'].'">'.$row['placa'].'</option>';
		        	}
		        ?>
		      </select>
		    </div>
		    <button type="submit" class="btn btn-success">Agregar</button>
		</form>
			
	</div>


</body>
</html>
