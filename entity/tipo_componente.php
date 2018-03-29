<?php 
  class tipo_componente{  
 private $idTipo_componente ; 
 private $nombre ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idTipo_componente = $data['idTipo_componente']; 
 

				            }

				            $this->nombre = $data['nombre']; 
 

				        }

    }
public function setidTipo_componente($idTipo_componente){ 
 $this->idTipo_componente = $idTipo_componente; 
 return $this; 
}
public function setnombre($nombre){ 
 $this->nombre = $nombre; 
 return $this; 
}
public function getidTipo_componente(){ 
 return $this->idTipo_componente; 
}
public function getnombre(){ 
 return $this->nombre; 
}
}