<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\software_has_equipo.php';

         class software_has_equipoMapper extends Mapper{  
  public function listarsoftware_has_equipo() {  

						$sql = "SELECT software_idSoftware, equipo_idEquipo FROM software_has_equipo" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new software_has_equipo($fila)); 

				        } 

				        return $results; 

			    	}    public function crearsoftware_has_equipo(software_has_equipo $software_has_equipo) {
$software_idSoftware = $software_has_equipo->getsoftware_idSoftware(); 
$equipo_idEquipo = $software_has_equipo->getequipo_idEquipo(); 
 

        			$sql = "INSERT INTO software_has_equipo (software_idSoftware,equipo_idEquipo) VALUES ('$software_idSoftware','$equipo_idEquipo')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(software_has_equipo $software_has_equipo) {
                    $software_idSoftware = $software_has_equipo->getsoftware_idSoftware();
$equipo_idEquipo = $software_has_equipo->getequipo_idEquipo();


                    $sql = "DELETE FROM software_has_equipo WHERE software_idSoftware = $software_idSoftware AND equipo_idEquipo = $equipo_idEquipo ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }