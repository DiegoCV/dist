<?php 
  class solucion{  
 private $id ; 
 private $problema_idProblema ; 
 private $estados_solucion_id ; 
 private $caracteristica ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id = $data['id']; 
 

				            }

				            $this->problema_idProblema = $data['problema_idProblema']; 
$this->estados_solucion_id = $data['estados_solucion_id']; 
$this->caracteristica = $data['caracteristica']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function setproblema_idProblema($problema_idProblema){ 
 $this->problema_idProblema = $problema_idProblema; 
 return $this; 
}
public function setestados_solucion_id($estados_solucion_id){ 
 $this->estados_solucion_id = $estados_solucion_id; 
 return $this; 
}
public function setcaracteristica($caracteristica){ 
 $this->caracteristica = $caracteristica; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function getproblema_idProblema(){ 
 return $this->problema_idProblema; 
}
public function getestados_solucion_id(){ 
 return $this->estados_solucion_id; 
}
public function getcaracteristica(){ 
 return $this->caracteristica; 
}
}