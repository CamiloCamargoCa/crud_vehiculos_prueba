<?php 
	
	include '../../controlador/vehiculosController.php';

	$placa="";
	$marca="";
	$modelo="";
	if (isset($_POST['placa']) && $_POST['placa']!='') {
		$placa=$_POST['placa'];
	}else{
		echo '<script language = javascript>
			alert("Codigo no registrado"); 
			self.location = "vehiculos.php";
		</script>';
	}
	if (isset($_POST['marca']) && $_POST['marca']!='') {
		$marca=$_POST['marca'];
	}else{
		echo '<script language = javascript>
			alert("Piso registrado"); 
			self.location = "vehiculos.php";
		</script>';
	}
	if (isset($_POST['modelo']) && $_POST['modelo']!='') {
		$modelo=$_POST['modelo'];
	}else{
		echo '<script language = javascript>
			alert("Modelo no registrado"); 
			self.location = "vehiculos.php";
		</script>';
	}


	$row=new VehiculoController();
	$resultado=$row->crearVehiculos($placa,$marca,$modelo);

	if ($resultado==1) {
		echo '<script language = javascript>
			alert("Registro Creado con Exito"); 
			self.location = "vehiculos.php";
		</script>';
	}else{
		echo '<script language = javascript>
			alert("Registro no pudo ser Creado"); 
			self.location = "vehiculos.php";
		</script>';
	}


?>