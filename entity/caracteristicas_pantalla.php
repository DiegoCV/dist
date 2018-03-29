<?php 
  class caracteristicas_pantalla{  
 private $idCaracteristicas_pantalla ; 
 private $pulgadas ; 
 private $tipo_pantalla_id ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idCaracteristicas_pantalla = $data['idCaracteristicas_pantalla']; 
 

				            }

				            $this->pulgadas = $data['pulgadas']; 
$this->tipo_pantalla_id = $data['tipo_pantalla_id']; 
 

				        }

    }
public function setidCaracteristicas_pantalla($idCaracteristicas_pantalla){ 
 $this->idCaracteristicas_pantalla = $idCaracteristicas_pantalla; 
 return $this; 
}
public function setpulgadas($pulgadas){ 
 $this->pulgadas = $pulgadas; 
 return $this; 
}
public function settipo_pantalla_id($tipo_pantalla_id){ 
 $this->tipo_pantalla_id = $tipo_pantalla_id; 
 return $this; 
}
public function getidCaracteristicas_pantalla(){ 
 return $this->idCaracteristicas_pantalla; 
}
public function getpulgadas(){ 
 return $this->pulgadas; 
}
public function gettipo_pantalla_id(){ 
 return $this->tipo_pantalla_id; 
}
}