<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\calidad.php';

         class calidadMapper extends Mapper{  
  public function listarcalidad() {  

						$sql = "SELECT idcalidad, clave, bloquea, bloqueu_automatico, copia_seguridad, antivirus, progra_no_autorizado, comparte_archivos, cuenta_adm, observaciones, equipo_idEquipo FROM calidad" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new calidad($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcalidad(calidad $calidad) {
$clave = $calidad->getclave(); 
$bloquea = $calidad->getbloquea(); 
$bloqueu_automatico = $calidad->getbloqueu_automatico(); 
$copia_seguridad = $calidad->getcopia_seguridad(); 
$antivirus = $calidad->getantivirus(); 
$progra_no_autorizado = $calidad->getprogra_no_autorizado(); 
$comparte_archivos = $calidad->getcomparte_archivos(); 
$cuenta_adm = $calidad->getcuenta_adm(); 
$observaciones = $calidad->getobservaciones(); 
$equipo_idEquipo = $calidad->getequipo_idEquipo(); 
 

        			$sql = "INSERT INTO calidad (clave,bloquea,bloqueu_automatico,copia_seguridad,antivirus,progra_no_autorizado,comparte_archivos,cuenta_adm,observaciones,equipo_idEquipo) VALUES ('$clave','$bloquea','$bloqueu_automatico','$copia_seguridad','$antivirus','$progra_no_autorizado','$comparte_archivos','$cuenta_adm','$observaciones','$equipo_idEquipo')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(calidad $calidad) {
                    $idcalidad = $calidad->getidcalidad();


                    $sql = "DELETE FROM calidad WHERE idcalidad = $idcalidad ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }