<?php  

include '../../modelo/conductores.php';


class ConductorController{

    public function listarConductores($cod){
       $emp = new Conductores();
       $result = $emp->listarConductores($cod);
       return $result;
   }

    public function selectConductoresId($id){        
       $emp = new Conductores();
       $result = $emp->selectConductoresId($id);
       return $result;
   }

    public function eliminarConductores($id){        
       $emp = new Conductores();
       $result = $emp->eliminarConductores($id);
       return $result;
   }

    public function crearConductores($identificación,$nombre,$estado,$vehiculo_id){       
       $emp = new Conductores();
       $result = $emp->crearConductores($identificación,$nombre,$estado,$vehiculo_id);
       return $result;
   }

    public function editarConductores($id,$identificación,$nombre,$estado,$vehiculo_id){        
       $emp = new Conductores();
       $result = $emp->editarConductores($id,$identificación,$nombre,$estado,$vehiculo_id);
       return $result;
   }

}


?>