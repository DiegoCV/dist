<?php 
  class calidad{  
 private $idcalidad ; 
 private $clave ; 
 private $bloquea ; 
 private $bloqueu_automatico ; 
 private $copia_seguridad ; 
 private $antivirus ; 
 private $progra_no_autorizado ; 
 private $comparte_archivos ; 
 private $cuenta_adm ; 
 private $observaciones ; 
 private $equipo_idEquipo ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->idcalidad = $data['idcalidad']; 
 

				            }

				            $this->clave = $data['clave']; 
$this->bloquea = $data['bloquea']; 
$this->bloqueu_automatico = $data['bloqueu_automatico']; 
$this->copia_seguridad = $data['copia_seguridad']; 
$this->antivirus = $data['antivirus']; 
$this->progra_no_autorizado = $data['progra_no_autorizado']; 
$this->comparte_archivos = $data['comparte_archivos']; 
$this->cuenta_adm = $data['cuenta_adm']; 
$this->observaciones = $data['observaciones']; 
$this->equipo_idEquipo = $data['equipo_idEquipo']; 
 

				        }

    }
public function setidcalidad($idcalidad){ 
 $this->idcalidad = $idcalidad; 
 return $this; 
}
public function setclave($clave){ 
 $this->clave = $clave; 
 return $this; 
}
public function setbloquea($bloquea){ 
 $this->bloquea = $bloquea; 
 return $this; 
}
public function setbloqueu_automatico($bloqueu_automatico){ 
 $this->bloqueu_automatico = $bloqueu_automatico; 
 return $this; 
}
public function setcopia_seguridad($copia_seguridad){ 
 $this->copia_seguridad = $copia_seguridad; 
 return $this; 
}
public function setantivirus($antivirus){ 
 $this->antivirus = $antivirus; 
 return $this; 
}
public function setprogra_no_autorizado($progra_no_autorizado){ 
 $this->progra_no_autorizado = $progra_no_autorizado; 
 return $this; 
}
public function setcomparte_archivos($comparte_archivos){ 
 $this->comparte_archivos = $comparte_archivos; 
 return $this; 
}
public function setcuenta_adm($cuenta_adm){ 
 $this->cuenta_adm = $cuenta_adm; 
 return $this; 
}
public function setobservaciones($observaciones){ 
 $this->observaciones = $observaciones; 
 return $this; 
}
public function setequipo_idEquipo($equipo_idEquipo){ 
 $this->equipo_idEquipo = $equipo_idEquipo; 
 return $this; 
}
public function getidcalidad(){ 
 return $this->idcalidad; 
}
public function getclave(){ 
 return $this->clave; 
}
public function getbloquea(){ 
 return $this->bloquea; 
}
public function getbloqueu_automatico(){ 
 return $this->bloqueu_automatico; 
}
public function getcopia_seguridad(){ 
 return $this->copia_seguridad; 
}
public function getantivirus(){ 
 return $this->antivirus; 
}
public function getprogra_no_autorizado(){ 
 return $this->progra_no_autorizado; 
}
public function getcomparte_archivos(){ 
 return $this->comparte_archivos; 
}
public function getcuenta_adm(){ 
 return $this->cuenta_adm; 
}
public function getobservaciones(){ 
 return $this->observaciones; 
}
public function getequipo_idEquipo(){ 
 return $this->equipo_idEquipo; 
}
}