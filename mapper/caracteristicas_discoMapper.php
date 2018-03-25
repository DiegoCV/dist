<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\caracteristicas_disco.php';

         class caracteristicas_discoMapper extends Mapper{  
  public function listarcaracteristicas_disco() {  

						$sql = "SELECT id, gb, conexion, tipoDisco_id FROM caracteristicas_disco" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new caracteristicas_disco($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcaracteristicas_disco(caracteristicas_disco $caracteristicas_disco) {
$gb = $caracteristicas_disco->getgb(); 
$conexion = $caracteristicas_disco->getconexion(); 
$tipoDisco_id = $caracteristicas_disco->gettipoDisco_id(); 
 

        			$sql = "INSERT INTO caracteristicas_disco (gb,conexion,tipoDisco_id) VALUES ('$gb','$conexion','$tipoDisco_id')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(caracteristicas_disco $caracteristicas_disco) {
                    $id = $caracteristicas_disco->getid();


                    $sql = "DELETE FROM caracteristicas_disco WHERE id = $id ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }