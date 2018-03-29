<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\equipo.php';

         class equipoMapper extends Mapper{  
  public function listarequipo() {  

						$sql = "SELECT idEquipo, usuario_Id, tipo_equipo_id, caracteriscas_red_id FROM equipo" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new equipo($fila)); 

				        } 

				        return $results; 

			    	}    public function crearequipo(equipo $equipo) {
$usuario_Id = $equipo->getusuario_Id(); 
$tipo_equipo_id = $equipo->gettipo_equipo_id(); 
$caracteriscas_red_id = $equipo->getcaracteriscas_red_id(); 
 

        			$sql = "INSERT INTO equipo (usuario_Id,tipo_equipo_id,caracteriscas_red_id) VALUES ('$usuario_Id','$tipo_equipo_id','$caracteriscas_red_id')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(equipo $equipo) {
                    $idEquipo = $equipo->getidEquipo();


                    $sql = "DELETE FROM equipo WHERE idEquipo = $idEquipo ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }