<?php 
  class caracteristicas_pc{  
 private $idcaracteristicas_pc ; 
 private $procesador ; 
 private $memoria ; 
 private $disco ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idcaracteristicas_pc = $data['idcaracteristicas_pc']; 
 

				            }

				            $this->procesador = $data['procesador']; 
$this->memoria = $data['memoria']; 
$this->disco = $data['disco']; 
 

				        }

    }
public function setidcaracteristicas_pc($idcaracteristicas_pc){ 
 $this->idcaracteristicas_pc = $idcaracteristicas_pc; 
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
public function getidcaracteristicas_pc(){ 
 return $this->idcaracteristicas_pc; 
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
}