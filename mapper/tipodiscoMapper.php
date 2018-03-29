<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\tipodisco.php';

         class tipodiscoMapper extends Mapper{  
  public function listartipodisco() {  

						$sql = "SELECT idTipoDisco, tipoDiscocol FROM tipodisco" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new tipodisco($fila)); 

				        } 

				        return $results; 

			    	}    public function creartipodisco(tipodisco $tipodisco) {
$idTipoDisco = $tipodisco->getidTipoDisco(); 
$tipoDiscocol = $tipodisco->gettipoDiscocol(); 
 

        			$sql = "INSERT INTO tipodisco (idTipoDisco,tipoDiscocol) VALUES ('$idTipoDisco','$tipoDiscocol')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(tipodisco $tipodisco) {
                    $idTipoDisco = $tipodisco->getidTipoDisco();


                    $sql = "DELETE FROM tipodisco WHERE idTipoDisco = $idTipoDisco ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }