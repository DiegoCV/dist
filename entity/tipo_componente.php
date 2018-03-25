<?php 
  class tipo_componente{  
 private $id ; 
 private $nombre ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id = $data['id']; 
 

				            }

				            $this->nombre = $data['nombre']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function setnombre($nombre){ 
 $this->nombre = $nombre; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function getnombre(){ 
 return $this->nombre; 
}
}