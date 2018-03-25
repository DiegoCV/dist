<?php 
  class caracteristicas_impresoras{  
 private $id ; 
 private $caracteriscas_red_id ; 
 private $tipo_impresion_id ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id = $data['id']; 
 

				            }

				            $this->caracteriscas_red_id = $data['caracteriscas_red_id']; 
$this->tipo_impresion_id = $data['tipo_impresion_id']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function setcaracteriscas_red_id($caracteriscas_red_id){ 
 $this->caracteriscas_red_id = $caracteriscas_red_id; 
 return $this; 
}
public function settipo_impresion_id($tipo_impresion_id){ 
 $this->tipo_impresion_id = $tipo_impresion_id; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function getcaracteriscas_red_id(){ 
 return $this->caracteriscas_red_id; 
}
public function gettipo_impresion_id(){ 
 return $this->tipo_impresion_id; 
}
}