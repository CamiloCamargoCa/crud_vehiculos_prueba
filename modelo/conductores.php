<?php 

include ("conexion.php");

class Conductores{

	  private $id;
      private $identificación;
      private $nombre;
      private $estado;
      private $vehiculo_id;
      
      public function listarConductores($identificación){

        $this->identificación=$identificación;
        $validacion="";
        if ($identificación!="") {
          $validacion=" AND identificación like '%".$this->identificación."%'";
        }       
        $listar="SELECT co.*,ve.placa FROM `conductores`co INNER JOIN vehiculos ve ON co.vehiculo_id=ve.id WHERE 1=1 ".$validacion;
        $con=new conectar();
        $consul=mysqli_query($con->conectar(), $listar);
        return $consul;
         
        mysqli_close($con->conectar());
      }

      public function selectConductoresId($id){ 
        $this->id=$id;       
        $listar="SELECT * FROM `conductores` WHERE id=".$this->id;
        $con=new conectar();
        $consul=mysqli_query($con->conectar(), $listar);
        return $consul;
        mysqli_close($con->conectar());
      }

      public function eliminarConductores($id){
        $this->id=$id;         
        $eliminar="DELETE FROM `conductores` WHERE id=".$this->id; 
        $con=new conectar();
        $var=0;
        if(mysqli_query($con->conectar(), $eliminar)){
          $var=1;
        }else{
          $var=0;
        }
        return $var;
        mysqli_close($con->conectar());
      }

      public function crearConductores($identificación,$nombre,$estado,$vehiculo_id){
         $this->identificación=$identificación;
         $this->nombre=$nombre;
         $this->estado=$estado;
         $this->vehiculo_id=$vehiculo_id;
        $crear="INSERT INTO `conductores`(`identificacion`, `nombre`, `estado`, `vehiculo_id`) VALUES ('".$this->identificación."','".$this->nombre."','".$this->estado."',".$this->vehiculo_id.")";
        // echo '<script>console.log("'.$crear.'")</script>';
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

      public function editarConductores($id,$identificación,$nombre,$estado){
        $this->id=$id;
        $this->identificación=$identificación;
        $this->nombre=$nombre;
        $this->estado=$estado;    
        $editar="UPDATE `conductores` SET `identificacion`='".$this->identificación."',`nombre`=".$this->nombre.",`estado`=".$this->estado." WHERE `id`=".$this->id."";
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