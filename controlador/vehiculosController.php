<?php  

include '../../modelo/vehiculos.php';


class VehiculoController{

    public function listarVehiculos($cod){        
       $emp = new Vehiculos();
       $result = $emp->listarVehiculos($cod);
       return $result;
   }

    public function selectVehiculosId($id){        
       $emp = new Vehiculos();
       $result = $emp->selectVehiculosId($id);
       return $result;
   }

    public function eliminarVehiculos($id){        
       $emp = new Vehiculos();
       $result = $emp->eliminarVehiculos($id);
       return $result;
   }

    public function crearVehiculos($placa,$marca,$modelo){       
       $emp = new Vehiculos();
       $result = $emp->crearVehiculos($placa,$marca,$modelo);
       return $result;
   }

    public function editarVehiculos($id,$placa,$marca,$modelo){        
       $emp = new Vehiculos();
       $result = $emp->editarVehiculos($id,$placa,$marca,$modelo);
       return $result;
   }

}


?>