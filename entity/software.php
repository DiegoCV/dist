<?php 
  class software{  
 private $idSoftware ; 
 private $Tipo_Software_idTipo_Software ; 
 private $fecha_vencimiento ; 
 private $version ; 
 private $nombre ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idSoftware = $data['idSoftware']; 
 

				            }

				            $this->Tipo_Software_idTipo_Software = $data['Tipo_Software_idTipo_Software']; 
$this->fecha_vencimiento = $data['fecha_vencimiento']; 
$this->version = $data['version']; 
$this->nombre = $data['nombre']; 
 

				        }

    }
public function setidSoftware($idSoftware){ 
 $this->idSoftware = $idSoftware; 
 return $this; 
}
public function setTipo_Software_idTipo_Software($Tipo_Software_idTipo_Software){ 
 $this->Tipo_Software_idTipo_Software = $Tipo_Software_idTipo_Software; 
 return $this; 
}
public function setfecha_vencimiento($fecha_vencimiento){ 
 $this->fecha_vencimiento = $fecha_vencimiento; 
 return $this; 
}
public function setversion($version){ 
 $this->version = $version; 
 return $this; 
}
public function setnombre($nombre){ 
 $this->nombre = $nombre; 
 return $this; 
}
public function getidSoftware(){ 
 return $this->idSoftware; 
}
public function getTipo_Software_idTipo_Software(){ 
 return $this->Tipo_Software_idTipo_Software; 
}
public function getfecha_vencimiento(){ 
 return $this->fecha_vencimiento; 
}
public function getversion(){ 
 return $this->version; 
}
public function getnombre(){ 
 return $this->nombre; 
}
}