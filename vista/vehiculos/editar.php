<?php

	include '../../controlador/vehiculosController.php';

	$id=0;

	if (isset($_REQUEST['id']) && $_REQUEST['id']!='') {
		$id=$_REQUEST['id'];
	}else{
		echo '<script language = javascript>
			alert("Id no seleccionado o no reconocido"); 
			self.location = "vehiculos.php";
		</script>';
	}

	$row=new VehiculoController();
	$resultado=$row->selectVehiculosId($id);

	$row = mysqli_fetch_row($resultado);

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
				<a href="vehiculos.php" class="btn btn-primary">Atras</a>
			</div>
			<div class="col-12 col-sm-6">
				<center><h3>Editar Vehiculo</h3></center>
			</div>
			<!-- <div class="col-12 col-sm-4">
				<a href="crear.php" class="btn btn-success">Registar</a>
			</div> -->
		</div>
		<br>
		<form action="opeEditar.php" method="post">
			
			<input class="form-control form-control-sm" type="hidden" name="id" value="<?php echo $row[0]; ?>" placeholder="" id="">
			<div class="form-group">
			  <label class="col-form-label col-form-label-sm" for="inputSmall">Placa</label>
			  <input class="form-control form-control-sm" type="text" name="placa" value="<?php echo $row[1]; ?>" placeholder="" id="">
			</div>

			<div class="form-group">
			  <label class="col-form-label col-form-label-sm" for="inputSmall">Marca</label>
			  <input class="form-control form-control-sm" type="text" name="marca" value="<?php echo $row[2]; ?>" placeholder="" id="">
			</div>

			<div class="form-group">
			  <label class="col-form-label col-form-label-sm" for="inputSmall">Modelo</label>
			  <input class="form-control form-control-sm" type="number" name="modelo" value="<?php echo $row[3]; ?>" placeholder="" id="">
			</div>	

		    <button type="submit" class="btn btn-success">Editar</button>
		</form>

	</div>
	
</body>
</html>
