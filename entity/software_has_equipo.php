<?php 
  class software_has_equipo{  
 private $software_idSoftware ; 
 private $equipo_idEquipo ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                 

				            }

				            $this->software_idSoftware = $data['software_idSoftware']; 
$this->equipo_idEquipo = $data['equipo_idEquipo']; 
 

				        }

    }
public function setsoftware_idSoftware($software_idSoftware){ 
 $this->software_idSoftware = $software_idSoftware; 
 return $this; 
}
public function setequipo_idEquipo($equipo_idEquipo){ 
 $this->equipo_idEquipo = $equipo_idEquipo; 
 return $this; 
}
public function getsoftware_idSoftware(){ 
 return $this->software_idSoftware; 
}
public function getequipo_idEquipo(){ 
 return $this->equipo_idEquipo; 
}
}