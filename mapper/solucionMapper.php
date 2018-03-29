<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\solucion.php';

         class solucionMapper extends Mapper{  
  public function listarsolucion() {  

						$sql = "SELECT problema_idProblema, estados_solucion_id, caracteristica FROM solucion" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new solucion($fila)); 

				        } 

				        return $results; 

			    	}    public function crearsolucion(solucion $solucion) {
$problema_idProblema = $solucion->getproblema_idProblema(); 
$estados_solucion_id = $solucion->getestados_solucion_id(); 
$caracteristica = $solucion->getcaracteristica(); 
 

        			$sql = "INSERT INTO solucion (problema_idProblema,estados_solucion_id,caracteristica) VALUES ('$problema_idProblema','$estados_solucion_id','$caracteristica')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(solucion $solucion) {
                    

                    $sql = "DELETE FROM solucion WHERE ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }