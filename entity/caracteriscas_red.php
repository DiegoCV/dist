<?php 
  class caracteriscas_red{  
 private $id ; 
 private $ip ; 
 private $mascara ; 
 private $puerta_enlace ; 
 private $dns ; 
 private $dns2 ; 
  public function __construct(array $data = null) { 
 if (!is_null($data)) { 

				            if (array_key_exists('id', $data)) { 

				                $this->id = $data['id']; 
 

				            }

				            $this->ip = $data['ip']; 
$this->mascara = $data['mascara']; 
$this->puerta_enlace = $data['puerta_enlace']; 
$this->dns = $data['dns']; 
$this->dns2 = $data['dns2']; 
 

				        }

    }
public function setid($id){ 
 $this->id = $id; 
 return $this; 
}
public function setip($ip){ 
 $this->ip = $ip; 
 return $this; 
}
public function setmascara($mascara){ 
 $this->mascara = $mascara; 
 return $this; 
}
public function setpuerta_enlace($puerta_enlace){ 
 $this->puerta_enlace = $puerta_enlace; 
 return $this; 
}
public function setdns($dns){ 
 $this->dns = $dns; 
 return $this; 
}
public function setdns2($dns2){ 
 $this->dns2 = $dns2; 
 return $this; 
}
public function getid(){ 
 return $this->id; 
}
public function getip(){ 
 return $this->ip; 
}
public function getmascara(){ 
 return $this->mascara; 
}
public function getpuerta_enlace(){ 
 return $this->puerta_enlace; 
}
public function getdns(){ 
 return $this->dns; 
}
public function getdns2(){ 
 return $this->dns2; 
}
}