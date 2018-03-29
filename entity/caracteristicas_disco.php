<?php 
  class caracteristicas_disco{  
 private $idcCaracteristicas_disco ; 
 private $gb ; 
 private $conexion ; 
 private $tipoDisco_id ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idcCaracteristicas_disco = $data['idcCaracteristicas_disco']; 
 

				            }

				            $this->gb = $data['gb']; 
$this->conexion = $data['conexion']; 
$this->tipoDisco_id = $data['tipoDisco_id']; 
 

				        }

    }
public function setidcCaracteristicas_disco($idcCaracteristicas_disco){ 
 $this->idcCaracteristicas_disco = $idcCaracteristicas_disco; 
 return $this; 
}
public function setgb($gb){ 
 $this->gb = $gb; 
 return $this; 
}
public function setconexion($conexion){ 
 $this->conexion = $conexion; 
 return $this; 
}
public function settipoDisco_id($tipoDisco_id){ 
 $this->tipoDisco_id = $tipoDisco_id; 
 return $this; 
}
public function getidcCaracteristicas_disco(){ 
 return $this->idcCaracteristicas_disco; 
}
public function getgb(){ 
 return $this->gb; 
}
public function getconexion(){ 
 return $this->conexion; 
}
public function gettipoDisco_id(){ 
 return $this->tipoDisco_id; 
}
}