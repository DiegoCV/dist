<?php 
  class caracteristicas_memoria{  
 private $id ; 
 private $gb ; 
 private $tipo ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id = $data['id']; 
 

				            }

				            $this->gb = $data['gb']; 
$this->tipo = $data['tipo']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function setgb($gb){ 
 $this->gb = $gb; 
 return $this; 
}
public function settipo($tipo){ 
 $this->tipo = $tipo; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function getgb(){ 
 return $this->gb; 
}
public function gettipo(){ 
 return $this->tipo; 
}
}