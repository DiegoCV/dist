<?php 
  class usuario{  
 private $IdUsuario ; 
 private $Nombre ; 
 private $Contraseña ; 
 private $Estado ; 
 private $correo ; 
 private $Cargo_id ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                 

				            }

				            $this->IdUsuario = $data['IdUsuario']; 
$this->Nombre = $data['Nombre']; 
$this->Contraseña = $data['Contraseña']; 
$this->Estado = $data['Estado']; 
$this->correo = $data['correo']; 
$this->Cargo_id = $data['Cargo_id']; 
 

				        }

    }
public function setIdUsuario($IdUsuario){ 
 $this->IdUsuario = $IdUsuario; 
 return $this; 
}
public function setNombre($Nombre){ 
 $this->Nombre = $Nombre; 
 return $this; 
}
public function setContraseña($Contraseña){ 
 $this->Contraseña = $Contraseña; 
 return $this; 
}
public function setEstado($Estado){ 
 $this->Estado = $Estado; 
 return $this; 
}
public function setcorreo($correo){ 
 $this->correo = $correo; 
 return $this; 
}
public function setCargo_id($Cargo_id){ 
 $this->Cargo_id = $Cargo_id; 
 return $this; 
}
public function getIdUsuario(){ 
 return $this->IdUsuario; 
}
public function getNombre(){ 
 return $this->Nombre; 
}
public function getContraseña(){ 
 return $this->Contraseña; 
}
public function getEstado(){ 
 return $this->Estado; 
}
public function getcorreo(){ 
 return $this->correo; 
}
public function getCargo_id(){ 
 return $this->Cargo_id; 
}
}