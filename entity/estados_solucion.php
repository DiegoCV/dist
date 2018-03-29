<?php 
  class estados_solucion{  
 private $idEstados_solucion ; 
 private $estado ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idEstados_solucion = $data['idEstados_solucion']; 
 

				            }

				            $this->estado = $data['estado']; 
 

				        }

    }
public function setidEstados_solucion($idEstados_solucion){ 
 $this->idEstados_solucion = $idEstados_solucion; 
 return $this; 
}
public function setestado($estado){ 
 $this->estado = $estado; 
 return $this; 
}
public function getidEstados_solucion(){ 
 return $this->idEstados_solucion; 
}
public function getestado(){ 
 return $this->estado; 
}
}