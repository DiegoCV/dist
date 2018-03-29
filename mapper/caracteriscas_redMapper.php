<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\caracteriscas_red.php';

         class caracteriscas_redMapper extends Mapper{  
  public function listarcaracteriscas_red() {  

						$sql = "SELECT idCaracteriscas_red, ip, mascara, puerta_enlace, dns, dns2 FROM caracteriscas_red" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new caracteriscas_red($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcaracteriscas_red(caracteriscas_red $caracteriscas_red) {
$ip = $caracteriscas_red->getip(); 
$mascara = $caracteriscas_red->getmascara(); 
$puerta_enlace = $caracteriscas_red->getpuerta_enlace(); 
$dns = $caracteriscas_red->getdns(); 
$dns2 = $caracteriscas_red->getdns2(); 
 

        			$sql = "INSERT INTO caracteriscas_red (ip,mascara,puerta_enlace,dns,dns2) VALUES ('$ip','$mascara','$puerta_enlace','$dns','$dns2')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(caracteriscas_red $caracteriscas_red) {
                    $idCaracteriscas_red = $caracteriscas_red->getidCaracteriscas_red();


                    $sql = "DELETE FROM caracteriscas_red WHERE idCaracteriscas_red = $idCaracteriscas_red ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }