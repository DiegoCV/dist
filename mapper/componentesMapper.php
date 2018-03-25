<?php 

            include_once dirname(__FILE__) . '\Mapper.php';

            include_once substr(getcwd(), 0,26).'\entity\componentes.php';

         class componentesMapper extends Mapper{  
  public function listarcomponentes() {  

						$sql = "SELECT id, Equipo_idEquipo, marca, modelo, serial, stiker_activo, fecha_compra, caracteristicas_pantalla_id, caracteristicas_memoria_id, caracteristicas_disco_id, caracteristicas_portatil_id, caracteristicas_todoenuno_id, tipo_componente_id, caracteristicas_impresoras_id FROM componentes" ;  
				        
				        $results = array();  

				        foreach ($this->db->query($sql) as $fila) { 

				            array_push($results, new componentes($fila)); 

				        } 

				        return $results; 

			    	}    public function crearcomponentes(componentes $componentes) {
$Equipo_idEquipo = $componentes->getEquipo_idEquipo(); 
$marca = $componentes->getmarca(); 
$modelo = $componentes->getmodelo(); 
$serial = $componentes->getserial(); 
$stiker_activo = $componentes->getstiker_activo(); 
$fecha_compra = $componentes->getfecha_compra(); 
$caracteristicas_pantalla_id = $componentes->getcaracteristicas_pantalla_id(); 
$caracteristicas_memoria_id = $componentes->getcaracteristicas_memoria_id(); 
$caracteristicas_disco_id = $componentes->getcaracteristicas_disco_id(); 
$caracteristicas_portatil_id = $componentes->getcaracteristicas_portatil_id(); 
$caracteristicas_todoenuno_id = $componentes->getcaracteristicas_todoenuno_id(); 
$tipo_componente_id = $componentes->gettipo_componente_id(); 
$caracteristicas_impresoras_id = $componentes->getcaracteristicas_impresoras_id(); 
 

        			$sql = "INSERT INTO componentes (Equipo_idEquipo,marca,modelo,serial,stiker_activo,fecha_compra,caracteristicas_pantalla_id,caracteristicas_memoria_id,caracteristicas_disco_id,caracteristicas_portatil_id,caracteristicas_todoenuno_id,tipo_componente_id,caracteristicas_impresoras_id) VALUES ('$Equipo_idEquipo','$marca','$modelo','$serial','$stiker_activo','$fecha_compra','$caracteristicas_pantalla_id','$caracteristicas_memoria_id','$caracteristicas_disco_id','$caracteristicas_portatil_id','$caracteristicas_todoenuno_id','$tipo_componente_id','$caracteristicas_impresoras_id')"; 

        			$stmt   = $this->db->prepare($sql);

    				$result = $stmt->execute();

					    if (!$result) {

					        throw new Exception("couldnotsaverecord");

					    } else {

					        echo "GUARDADOBIEN";

					    }

					}
public function eliminar(componentes $componentes) {
                    $id = $componentes->getid();
$serial = $componentes->getserial();


                    $sql = "DELETE FROM componentes WHERE id = $id AND serial = $serial ";
                    $stmt = $this->db->prepare($sql);
                    $result = $stmt->execute();
                    if (!$result) {
                        throw new Exception("No se pudo eliminar");
                    } else {
                        echo "eliminado con exito";
                    }
                }
            }