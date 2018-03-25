<?php 
  class tipo_equipo{  
 private $id_tipo_equipo ; 
 private $nombre ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id_tipo_equipo = $data['id_tipo_equipo']; 
 

				            }

				            $this->nombre = $data['nombre']; 
 

				        }

    }
public function setid_tipo_equipo($id_tipo_equipo){ 
 $this->id_tipo_equipo = $id_tipo_equipo; 
 return $this; 
}
public function setnombre($nombre){ 
 $this->nombre = $nombre; 
 return $this; 
}
public function getid_tipo_equipo(){ 
 return $this->id_tipo_equipo; 
}
public function getnombre(){ 
 return $this->nombre; 
}
}