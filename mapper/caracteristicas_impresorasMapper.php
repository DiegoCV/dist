<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\caracteristicas_impresoras.php';

         class caracteristicas_impresorasMapper extends Mapper{  
  public function listarcaracteristicas_impresoras() {  

						$sql = "SELECT idCaracteristicas_impresoras, caracteriscas_red_id, tipo_impresion_id FROM caracteristicas_impresoras" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new caracteristicas_impresoras($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcaracteristicas_impresoras(caracteristicas_impresoras $caracteristicas_impresoras) {
$caracteriscas_red_id = $caracteristicas_impresoras->getcaracteriscas_red_id(); 
$tipo_impresion_id = $caracteristicas_impresoras->gettipo_impresion_id(); 
 

        			$sql = "INSERT INTO caracteristicas_impresoras (caracteriscas_red_id,tipo_impresion_id) VALUES ('$caracteriscas_red_id','$tipo_impresion_id')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(caracteristicas_impresoras $caracteristicas_impresoras) {
                    $idCaracteristicas_impresoras = $caracteristicas_impresoras->getidCaracteristicas_impresoras();


                    $sql = "DELETE FROM caracteristicas_impresoras WHERE idCaracteristicas_impresoras = $idCaracteristicas_impresoras ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }