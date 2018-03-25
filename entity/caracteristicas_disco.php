<?php 
  class caracteristicas_disco{  
 private $id ; 
 private $gb ; 
 private $conexion ; 
 private $tipoDisco_id ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id = $data['id']; 
 

				            }

				            $this->gb = $data['gb']; 
$this->conexion = $data['conexion']; 
$this->tipoDisco_id = $data['tipoDisco_id']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
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
public function getid(){ 
 return $this->id; 
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