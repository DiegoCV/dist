<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\tipo_pantalla.php';

         class tipo_pantallaMapper extends Mapper{  
  public function listartipo_pantalla() {  

						$sql = "SELECT idTipo_pantalla, tipo_pantalla FROM tipo_pantalla" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new tipo_pantalla($fila)); 

				        } 

				        return $results; 

			    	}    public function creartipo_pantalla(tipo_pantalla $tipo_pantalla) {
$idTipo_pantalla = $tipo_pantalla->getidTipo_pantalla(); 
$tipo_pantalla = $tipo_pantalla->gettipo_pantalla(); 
 

        			$sql = "INSERT INTO tipo_pantalla (idTipo_pantalla,tipo_pantalla) VALUES ('$idTipo_pantalla','$tipo_pantalla')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(tipo_pantalla $tipo_pantalla) {
                    $idTipo_pantalla = $tipo_pantalla->getidTipo_pantalla();


                    $sql = "DELETE FROM tipo_pantalla WHERE idTipo_pantalla = $idTipo_pantalla ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }