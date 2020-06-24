<?php 
	
	include '../../controlador/vehiculosController.php';

	$id=0;
	$placa="";
	$marca="";
	$modelo="";
	if (isset($_POST['id']) && $_POST['id']!='') {
		$id=$_POST['id'];
	}else{
		echo '<script language = javascript>
			alert("Id no registrado o no reconocido"); 
			self.location = "vehiculos.php";
		</script>';
	}
	if (isset($_POST['placa']) && $_POST['placa']!='') {
		$placa=$_POST['placa'];
	}else{
		echo '<script language = javascript>
			alert("placa no registrada o no reconocido"); 
			self.location = "vehiculos.php";
		</script>';
	}
	if (isset($_POST['marca']) && $_POST['marca']!='') {
		$marca=$_POST['marca'];
	}else{
		echo '<script language = javascript>
			alert("marca no registrada o no reconocido"); 
			self.location = "vehiculos.php";
		</script>';
	}
	if (isset($_POST['modelo']) && $_POST['modelo']!='') {
		$modelo=$_POST['modelo'];
	}else{
		echo '<script language = javascript>
			alert("modelo no registrado o no reconocido"); 
			self.location = "vehiculos.php";
		</script>';
	}


	$row=new VehiculoController();
	$resultado=$row->editarVehiculos($id,$placa,$marca,$modelo);

	if ($resultado==1) {
		echo '<script language = javascript>
			alert("Registro Editado con Exito"); 
			self.location = "vehiculos.php";
		</script>';
	}else{
		echo '<script language = javascript>
			alert("Registro no pudo ser Editado"); 
			self.location = "vehiculos.php";
		</script>';
	}


?>