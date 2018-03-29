<?php 
  class equipo{  
 private $idEquipo ; 
 private $usuario_Id ; 
 private $tipo_equipo_id ; 
 private $caracteriscas_red_id ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idEquipo = $data['idEquipo']; 
 

				            }

				            $this->usuario_Id = $data['usuario_Id']; 
$this->tipo_equipo_id = $data['tipo_equipo_id']; 
$this->caracteriscas_red_id = $data['caracteriscas_red_id']; 
 

				        }

    }
public function setidEquipo($idEquipo){ 
 $this->idEquipo = $idEquipo; 
 return $this; 
}
public function setusuario_Id($usuario_Id){ 
 $this->usuario_Id = $usuario_Id; 
 return $this; 
}
public function settipo_equipo_id($tipo_equipo_id){ 
 $this->tipo_equipo_id = $tipo_equipo_id; 
 return $this; 
}
public function setcaracteriscas_red_id($caracteriscas_red_id){ 
 $this->caracteriscas_red_id = $caracteriscas_red_id; 
 return $this; 
}
public function getidEquipo(){ 
 return $this->idEquipo; 
}
public function getusuario_Id(){ 
 return $this->usuario_Id; 
}
public function gettipo_equipo_id(){ 
 return $this->tipo_equipo_id; 
}
public function getcaracteriscas_red_id(){ 
 return $this->caracteriscas_red_id; 
}
}