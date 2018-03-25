<?php 
  class tipo_pantalla{  
 private $id ; 
 private $tipo_pantalla ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                 

				            }

				            $this->id = $data['id']; 
$this->tipo_pantalla = $data['tipo_pantalla']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function settipo_pantalla($tipo_pantalla){ 
 $this->tipo_pantalla = $tipo_pantalla; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function gettipo_pantalla(){ 
 return $this->tipo_pantalla; 
}
}