<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\tipo_pantalla.php';

         class tipo_pantallaMapper extends Mapper{  
  public function listartipo_pantalla() {  

						$sql = "SELECT id, tipo_pantalla FROM tipo_pantalla" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new tipo_pantalla($fila)); 

				        } 

				        return $results; 

			    	}    public function creartipo_pantalla(tipo_pantalla $tipo_pantalla) {
$id = $tipo_pantalla->getid(); 
$tipo_pantalla = $tipo_pantalla->gettipo_pantalla(); 
 

        			$sql = "INSERT INTO tipo_pantalla (id,tipo_pantalla) VALUES ('$id','$tipo_pantalla')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(tipo_pantalla $tipo_pantalla) {
                    $id = $tipo_pantalla->getid();


                    $sql = "DELETE FROM tipo_pantalla WHERE id = $id ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }