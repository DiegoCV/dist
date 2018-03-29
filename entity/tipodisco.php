<?php 
  class tipodisco{  
 private $idTipoDisco ; 
 private $tipoDiscocol ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                 

				            }

				            $this->idTipoDisco = $data['idTipoDisco']; 
$this->tipoDiscocol = $data['tipoDiscocol']; 
 

				        }

    }
public function setidTipoDisco($idTipoDisco){ 
 $this->idTipoDisco = $idTipoDisco; 
 return $this; 
}
public function settipoDiscocol($tipoDiscocol){ 
 $this->tipoDiscocol = $tipoDiscocol; 
 return $this; 
}
public function getidTipoDisco(){ 
 return $this->idTipoDisco; 
}
public function gettipoDiscocol(){ 
 return $this->tipoDiscocol; 
}
}