<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\software.php';

         class softwareMapper extends Mapper{  
  public function listarsoftware() {  

						$sql = "SELECT idSoftware, Tipo_Software_idTipo_Software, fecha_vencimiento, version, nombre FROM software" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new software($fila)); 

				        } 

				        return $results; 

			    	}    public function crearsoftware(software $software) {
$Tipo_Software_idTipo_Software = $software->getTipo_Software_idTipo_Software(); 
$fecha_vencimiento = $software->getfecha_vencimiento(); 
$version = $software->getversion(); 
$nombre = $software->getnombre(); 
 

        			$sql = "INSERT INTO software (Tipo_Software_idTipo_Software,fecha_vencimiento,version,nombre) VALUES ('$Tipo_Software_idTipo_Software','$fecha_vencimiento','$version','$nombre')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(software $software) {
                    $idSoftware = $software->getidSoftware();


                    $sql = "DELETE FROM software WHERE idSoftware = $idSoftware ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }