<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\caracteristicas_pantalla.php';

         class caracteristicas_pantallaMapper extends Mapper{  
  public function listarcaracteristicas_pantalla() {  

						$sql = "SELECT idCaracteristicas_pantalla, pulgadas, tipo_pantalla_id FROM caracteristicas_pantalla" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new caracteristicas_pantalla($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcaracteristicas_pantalla(caracteristicas_pantalla $caracteristicas_pantalla) {
$pulgadas = $caracteristicas_pantalla->getpulgadas(); 
$tipo_pantalla_id = $caracteristicas_pantalla->gettipo_pantalla_id(); 
 

        			$sql = "INSERT INTO caracteristicas_pantalla (pulgadas,tipo_pantalla_id) VALUES ('$pulgadas','$tipo_pantalla_id')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(caracteristicas_pantalla $caracteristicas_pantalla) {
                    $idCaracteristicas_pantalla = $caracteristicas_pantalla->getidCaracteristicas_pantalla();


                    $sql = "DELETE FROM caracteristicas_pantalla WHERE idCaracteristicas_pantalla = $idCaracteristicas_pantalla ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }