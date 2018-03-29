<?php 
  class tipo_pantalla{  
 private $idTipo_pantalla ; 
 private $tipo_pantalla ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                 

				            }

				            $this->idTipo_pantalla = $data['idTipo_pantalla']; 
$this->tipo_pantalla = $data['tipo_pantalla']; 
 

				        }

    }
public function setidTipo_pantalla($idTipo_pantalla){ 
 $this->idTipo_pantalla = $idTipo_pantalla; 
 return $this; 
}
public function settipo_pantalla($tipo_pantalla){ 
 $this->tipo_pantalla = $tipo_pantalla; 
 return $this; 
}
public function getidTipo_pantalla(){ 
 return $this->idTipo_pantalla; 
}
public function gettipo_pantalla(){ 
 return $this->tipo_pantalla; 
}
}