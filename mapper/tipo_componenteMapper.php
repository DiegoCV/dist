<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\tipo_componente.php';

         class tipo_componenteMapper extends Mapper{  
  public function listartipo_componente() {  

						$sql = "SELECT idTipo_componente, nombre FROM tipo_componente" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new tipo_componente($fila)); 

				        } 

				        return $results; 

			    	}    public function creartipo_componente(tipo_componente $tipo_componente) {
$nombre = $tipo_componente->getnombre(); 
 

        			$sql = "INSERT INTO tipo_componente (nombre) VALUES ('$nombre')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(tipo_componente $tipo_componente) {
                    $idTipo_componente = $tipo_componente->getidTipo_componente();


                    $sql = "DELETE FROM tipo_componente WHERE idTipo_componente = $idTipo_componente ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }