<?php 
  class problema{  
 private $idProblema ; 
 private $problema ; 
 private $Equipo_idEquipo ; 
 private $fecha_registro ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 


				                $this->idProblema = $data['idProblema']; 
 

				     

				            $this->problema = $data['problema']; 
$this->Equipo_idEquipo = $data['Equipo_idEquipo']; 
$this->fecha_registro = $data['fecha_registro']; 
 

				        }

    }
public function setidProblema($idProblema){ 
 $this->idProblema = $idProblema; 
 return $this; 
}
public function setproblema($problema){ 
 $this->problema = $problema; 
 return $this; 
}
public function setEquipo_idEquipo($Equipo_idEquipo){ 
 $this->Equipo_idEquipo = $Equipo_idEquipo; 
 return $this; 
}
public function setfecha_registro($fecha_registro){ 
 $this->fecha_registro = $fecha_registro; 
 return $this; 
}
public function getidProblema(){ 
 return $this->idProblema; 
}
public function getproblema(){ 
 return $this->problema; 
}
public function getEquipo_idEquipo(){ 
 return $this->Equipo_idEquipo; 
}
public function getfecha_registro(){ 
 return $this->fecha_registro; 
}
}