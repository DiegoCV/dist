<?php 
  class cargo{  
 private $IdCargo ; 
 private $Nombre ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 



				                $this->IdCargo = $data['IdCargo']; 
 


				            $this->Nombre = $data['Nombre']; 
 

				        }

    }
public function setIdCargo($IdCargo){ 
 $this->IdCargo = $IdCargo; 
 return $this; 
}
public function setNombre($Nombre){ 
 $this->Nombre = $Nombre; 
 return $this; 
}
public function getIdCargo(){ 
 return $this->IdCargo; 
}
public function getNombre(){ 
 return $this->Nombre; 
}
}