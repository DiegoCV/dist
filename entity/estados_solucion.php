<?php 
  class estados_solucion{  
 private $id ; 
 private $estado ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id = $data['id']; 
 

				            }

				            $this->estado = $data['estado']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function setestado($estado){ 
 $this->estado = $estado; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function getestado(){ 
 return $this->estado; 
}
}