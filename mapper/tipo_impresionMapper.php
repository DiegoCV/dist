<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\tipo_impresion.php';

         class tipo_impresionMapper extends Mapper{  
  public function listartipo_impresion() {  

						$sql = "SELECT id, tipo_impresion FROM tipo_impresion" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new tipo_impresion($fila)); 

				        } 

				        return $results; 

			    	}    public function creartipo_impresion(tipo_impresion $tipo_impresion) {
$tipo_impresion = $tipo_impresion->gettipo_impresion(); 
 

        			$sql = "INSERT INTO tipo_impresion (tipo_impresion) VALUES ('$tipo_impresion')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(tipo_impresion $tipo_impresion) {
                    $id = $tipo_impresion->getid();


                    $sql = "DELETE FROM tipo_impresion WHERE id = $id ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }