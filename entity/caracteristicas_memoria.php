<?php 
  class caracteristicas_memoria{  
 private $idCaracteristicas_memoria ; 
 private $gb ; 
 private $tipo ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idCaracteristicas_memoria = $data['idCaracteristicas_memoria']; 
 

				            }

				            $this->gb = $data['gb']; 
$this->tipo = $data['tipo']; 
 

				        }

    }
public function setidCaracteristicas_memoria($idCaracteristicas_memoria){ 
 $this->idCaracteristicas_memoria = $idCaracteristicas_memoria; 
 return $this; 
}
public function setgb($gb){ 
 $this->gb = $gb; 
 return $this; 
}
public function settipo($tipo){ 
 $this->tipo = $tipo; 
 return $this; 
}
public function getidCaracteristicas_memoria(){ 
 return $this->idCaracteristicas_memoria; 
}
public function getgb(){ 
 return $this->gb; 
}
public function gettipo(){ 
 return $this->tipo; 
}
}