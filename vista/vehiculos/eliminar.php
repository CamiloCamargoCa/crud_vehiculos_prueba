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
$resultado=$row->eliminarVehiculos($id);

if ($resultado==1) {	
	echo '<script language = javascript>
		alert("Registro Eliminado con Exito"); 
		self.location = "vehiculos.php";
	</script>';
}else{
	echo '<script language = javascript>
		alert("Registro no pudo ser Eliminado"); 
		self.location = "vehiculos.php";
	</script>';
}

?>