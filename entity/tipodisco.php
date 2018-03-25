<?php 
  class tipodisco{  
 private $id ; 
 private $tipoDiscocol ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                 

				            }

				            $this->id = $data['id']; 
$this->tipoDiscocol = $data['tipoDiscocol']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function settipoDiscocol($tipoDiscocol){ 
 $this->tipoDiscocol = $tipoDiscocol; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function gettipoDiscocol(){ 
 return $this->tipoDiscocol; 
}
}