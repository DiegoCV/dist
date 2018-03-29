<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\caracteristicas_pc.php';

         class caracteristicas_pcMapper extends Mapper{  
  public function listarcaracteristicas_pc() {  

						$sql = "SELECT idcaracteristicas_pc, procesador, memoria, disco FROM caracteristicas_pc" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new caracteristicas_pc($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcaracteristicas_pc(caracteristicas_pc $caracteristicas_pc) {
$procesador = $caracteristicas_pc->getprocesador(); 
$memoria = $caracteristicas_pc->getmemoria(); 
$disco = $caracteristicas_pc->getdisco(); 
 

        			$sql = "INSERT INTO caracteristicas_pc (procesador,memoria,disco) VALUES ('$procesador','$memoria','$disco')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(caracteristicas_pc $caracteristicas_pc) {
                    $idcaracteristicas_pc = $caracteristicas_pc->getidcaracteristicas_pc();


                    $sql = "DELETE FROM caracteristicas_pc WHERE idcaracteristicas_pc = $idcaracteristicas_pc ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }