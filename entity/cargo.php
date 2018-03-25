<?php 
  class cargo{  
 private $Id ; 
 private $Nombre ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('Id', $data)) { 

				                $this->Id = $data['Id']; 
 

				            }

				            $this->Nombre = $data['Nombre']; 
 

				        }

    }
public function setId($Id){ 
 $this->Id = $Id; 
 return $this; 
}
public function setNombre($Nombre){ 
 $this->Nombre = $Nombre; 
 return $this; 
}
public function getId(){ 
 return $this->Id; 
}
public function getNombre(){ 
 return $this->Nombre; 
}
}