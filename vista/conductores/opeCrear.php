<?php 
	
	include '../../controlador/conductoresController.php';

	$identificacion="";
	$nombre="";
	$estado="";
	$vehiculo_id="";
	if (isset($_POST['identificacion']) && $_POST['identificacion']!='') {
		$identificacion=$_POST['identificacion'];
	}else{
		echo '<script language = javascript>
			alert("Identificacion no registrado"); 
			self.location = "conductores.php";
		</script>';
	}
	if (isset($_POST['nombre']) && $_POST['nombre']!='') {
		$nombre=$_POST['nombre'];
	}else{
		echo '<script language = javascript>
			alert("Nombre registrado"); 
			self.location = "conductores.php";
		</script>';
	}
	if (isset($_POST['estado']) && $_POST['estado']!='') {
		$estado=$_POST['estado'];
	}else{
		echo '<script language = javascript>
			alert("Estado no registrado"); 
			self.location = "conductores.php";
		</script>';
	}
	if (isset($_POST['vehiculo_id']) && $_POST['vehiculo_id']!='') {
		$vehiculo_id=$_POST['vehiculo_id'];
	}else{
		echo '<script language = javascript>
			alert("Vehiculo no registrado"); 
			self.location = "conductores.php";
		</script>';
	}


	$row=new ConductorController();
	$resultado=$row->crearConductores($identificacion,$nombre,$estado,$vehiculo_id);

	if ($resultado==1) {
		echo '<script language = javascript>
			alert("Registro Creado con Exito"); 
			self.location = "conductores.php";
		</script>';
	}else{
		echo '<script language = javascript>
			alert("Registro no pudo ser Creado"); 
			self.location = "conductores.php";
		</script>';
	}


?>