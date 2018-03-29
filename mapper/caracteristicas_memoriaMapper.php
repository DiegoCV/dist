<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\caracteristicas_memoria.php';

         class caracteristicas_memoriaMapper extends Mapper{  
  public function listarcaracteristicas_memoria() {  

						$sql = "SELECT idCaracteristicas_memoria, gb, tipo FROM caracteristicas_memoria" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new caracteristicas_memoria($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcaracteristicas_memoria(caracteristicas_memoria $caracteristicas_memoria) {
$gb = $caracteristicas_memoria->getgb(); 
$tipo = $caracteristicas_memoria->gettipo(); 
 

        			$sql = "INSERT INTO caracteristicas_memoria (gb,tipo) VALUES ('$gb','$tipo')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(caracteristicas_memoria $caracteristicas_memoria) {
                    $idCaracteristicas_memoria = $caracteristicas_memoria->getidCaracteristicas_memoria();


                    $sql = "DELETE FROM caracteristicas_memoria WHERE idCaracteristicas_memoria = $idCaracteristicas_memoria ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }