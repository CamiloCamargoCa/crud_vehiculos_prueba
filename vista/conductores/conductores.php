<?php
   include '../../controlador/conductoresController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Crud Vehiculos</title>
	<link href="../../bootstrap-4.5.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script src="../../bootstrap-4.5.0/js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="../../bootstrap-4.5.0/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
	<div class="container-fluid" style="background: whitesmoke">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="../../index.php">Crud Vehiculos</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="../../index.php">Inicio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../vehiculos/vehiculos.php">Vehiculos</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Conductores</a>
		      </li>
		    </ul>
		    <!-- <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search">
		      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		    </form> -->
		  </div>
		</nav>
	</div>
	
	<br>
		<center><h3>Crud Conductores</h3></center>
		<div class="col-12 col-sm-2">
			<a href="crear.php" class="btn btn-success">Registar Conductor</a>&nbsp;&nbsp;&nbsp;
		</div>

		<br>
		<table  class="table table-striped table-hover">
		<thead>
	    <tr  style="background-color:#000">
		<!-- <td  style="color:white;font-size:16px;font-weight:bold;">Id</td> -->
		<td  style="color:white;font-size:16px;font-weight:bold;">Identificación</td>
		<td  style="color:white;font-size:16px;font-weight:bold;">Nombre</td>
		<td  style="color:white;font-size:16px;font-weight:bold;">Estado</td>			
		<td  style="color:white;font-size:16px;font-weight:bold;">Vehiculo</td>	
		<!-- <td  style="color:white;font-size:16px;font-weight:bold;">Editar</td>				
		<td  style="color:white;font-size:16px;font-weight:bold;">Eliminar</td>	 -->		
		</tr>
	        </thead>
	    <?php 
	    $cod="";
		if (isset($_POST['buscar'])  && $_POST['buscar']!='') {
			$cod=$_POST['buscar'];
		}
	   $row=new ConductorController();
	   $listado=$row->listarConductores($cod);	
	while($fila=mysqli_fetch_array($listado)){
	      ?>  
	    <tbody>
		<tr>
		<!-- <td style="color:#286090;font-size:13px;"><?php echo $fila['id']; ?></td> -->
		<td style="font-size:16px;"><?php echo $fila['identificacion']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['nombre']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['estado']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['placa']; ?></td>
		<!-- <td style="font-size:16px;"><a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a></td>
		<td style="font-size:16px;"><a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td> -->
	    </tr>
	    </tbody>
	               <?php } ?>  
	    </table>
</body>
</html>

<?php 






?>