<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\tipo_equipo.php';

         class tipo_equipoMapper extends Mapper{  
  public function listartipo_equipo() {  

						$sql = "SELECT id_tipo_equipo, nombre FROM tipo_equipo" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new tipo_equipo($fila)); 

				        } 

				        return $results; 

			    	}    public function creartipo_equipo(tipo_equipo $tipo_equipo) {
$nombre = $tipo_equipo->getnombre(); 
 

        			$sql = "INSERT INTO tipo_equipo (nombre) VALUES ('$nombre')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(tipo_equipo $tipo_equipo) {
                    $id_tipo_equipo = $tipo_equipo->getid_tipo_equipo();


                    $sql = "DELETE FROM tipo_equipo WHERE id_tipo_equipo = $id_tipo_equipo ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }