<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\cargo.php';

         class cargoMapper extends Mapper{  
  public function listarcargo() {  

						$sql = "SELECT Id, Nombre FROM cargo" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new cargo($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcargo(cargo $cargo) {
$Nombre = $cargo->getNombre(); 
 

        			$sql = "INSERT INTO cargo (Nombre) VALUES ('$Nombre')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(cargo $cargo) {
                    $Id = $cargo->getId();


                    $sql = "DELETE FROM cargo WHERE Id = $Id ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }