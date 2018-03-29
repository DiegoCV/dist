<?php 
  class tipo_impresion{  
 private $idTipo_impresion ; 
 private $tipo_impresion ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idTipo_impresion = $data['idTipo_impresion']; 
 

				            }

				            $this->tipo_impresion = $data['tipo_impresion']; 
 

				        }

    }
public function setidTipo_impresion($idTipo_impresion){ 
 $this->idTipo_impresion = $idTipo_impresion; 
 return $this; 
}
public function settipo_impresion($tipo_impresion){ 
 $this->tipo_impresion = $tipo_impresion; 
 return $this; 
}
public function getidTipo_impresion(){ 
 return $this->idTipo_impresion; 
}
public function gettipo_impresion(){ 
 return $this->tipo_impresion; 
}
}