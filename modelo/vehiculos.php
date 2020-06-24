<?php 

include ("conexion.php");

class Vehiculos{

	  private $id;
      private $placa;
      private $marca;
      private $modelo;
      
      public function listarVehiculos($placa){

        $this->placa=$placa;
        $validacion="";
        if ($placa!="") {
          $validacion=" AND placa like '%".$this->placa."%'";
        }       
        $listar="SELECT * FROM `vehiculos` WHERE 1=1 ".$validacion;
        $con=new conectar();
        $consul=mysqli_query($con->conectar(), $listar);
        return $consul;
         
        mysqli_close($con->conectar());
      }

      public function selectVehiculosId($id){ 
        $this->id=$id;       
        $listar="SELECT * FROM `vehiculos` WHERE id=".$this->id;
        $con=new conectar();
        $consul=mysqli_query($con->conectar(), $listar);
        return $consul;
        mysqli_close($con->conectar());
      }

      public function eliminarVehiculos($id){
        $this->id=$id;   
        $preditar="UPDATE `conductores` SET vehiculo_id=null WHERE vehiculo_id=".$this->id; 
        $eliminar="DELETE FROM `vehiculos` WHERE id=".$this->id; 
        $con=new conectar();
        mysqli_query($con->conectar(), $preditar);
        $var=0;
        if(mysqli_query($con->conectar(), $eliminar)){
          $var=1;
        }else{
          $var=0;
        }
        return $var;
        mysqli_close($con->conectar());
      }

      public function crearVehiculos($placa,$marca,$modelo){
         $this->placa=$placa;
         $this->marca=$marca;
         $this->modelo=$modelo;
        $crear="INSERT INTO `vehiculos`(`placa`, `marca`, `modelo`) VALUES ('".$this->placa."','".$this->marca."','".$this->modelo."')";
        $con=new conectar();
        $var=0;
        if(mysqli_query($con->conectar(), $crear)){
          $var=1;
        }else{
          $var=0;
        }
        return $var;
        mysqli_close($con->conectar());
      }

      public function editarVehiculos($id,$placa,$marca,$modelo){
        $this->id=$id;
        $this->placa=$placa;
        $this->marca=$marca;
        $this->modelo=$modelo;    
        $editar="UPDATE `vehiculos` SET `placa`='".$this->placa."',`marca`='".$this->marca."',`modelo`='".$this->modelo."' WHERE `id`=".$this->id."";
        $con=new conectar();
        $var=0;
        if(mysqli_query($con->conectar(), $editar)){
          $var=1;
        }else{
          $var=0;
        }
        return $var;
        mysqli_close($con->conectar());
      }
}


?>