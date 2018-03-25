<?php 
  class tipo_impresion{  
 private $id ; 
 private $tipo_impresion ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id = $data['id']; 
 

				            }

				            $this->tipo_impresion = $data['tipo_impresion']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function settipo_impresion($tipo_impresion){ 
 $this->tipo_impresion = $tipo_impresion; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function gettipo_impresion(){ 
 return $this->tipo_impresion; 
}
}