<?php 
  class equipo{  
 private $idEquipo ; 
 private $usuario_Id ; 
 private $tipo_equipo_id ; 
 private $procesador ; 
 private $memoria ; 
 private $disco ; 
 private $caracteriscas_red_id ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idEquipo = $data['idEquipo']; 
 

				            }

				            $this->usuario_Id = $data['usuario_Id']; 
$this->tipo_equipo_id = $data['tipo_equipo_id']; 
$this->procesador = $data['procesador']; 
$this->memoria = $data['memoria']; 
$this->disco = $data['disco']; 
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
public function setprocesador($procesador){ 
 $this->procesador = $procesador; 
 return $this; 
}
public function setmemoria($memoria){ 
 $this->memoria = $memoria; 
 return $this; 
}
public function setdisco($disco){ 
 $this->disco = $disco; 
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
public function getprocesador(){ 
 return $this->procesador; 
}
public function getmemoria(){ 
 return $this->memoria; 
}
public function getdisco(){ 
 return $this->disco; 
}
public function getcaracteriscas_red_id(){ 
 return $this->caracteriscas_red_id; 
}
}