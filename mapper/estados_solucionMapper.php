<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\estados_solucion.php';

         class estados_solucionMapper extends Mapper{  
  public function listarestados_solucion() {  

						$sql = "SELECT id, estado FROM estados_solucion" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new estados_solucion($fila)); 

				        } 

				        return $results; 

			    	}    public function crearestados_solucion(estados_solucion $estados_solucion) {
$estado = $estados_solucion->getestado(); 
 

        			$sql = "INSERT INTO estados_solucion (estado) VALUES ('$estado')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(estados_solucion $estados_solucion) {
                    $id = $estados_solucion->getid();


                    $sql = "DELETE FROM estados_solucion WHERE id = $id ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }