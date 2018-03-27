<?php

include_once dirname(__FILE__) . '\Mapper.php';

include_once substr(getcwd(), 0, 26) . '\entity\problema.php';
include_once substr(getcwd(), 0, 26) . '\entity\solucion.php';
include_once substr(getcwd(), 0, 26) . '\entity\estados_solucion.php';
class problemaMapper extends Mapper {

    public function listarproblema() {

        $sql = "SELECT idProblema, problema, Equipo_idEquipo, fecha_registro FROM problema";

        $results = array();

        foreach ($this->db->query($sql) as $fila) {

            array_push($results, new problema($fila));
        }

        return $results;
    }

    public function crearproblema(problema $problema) {
        $problema = $problema->getproblema();
        $Equipo_idEquipo = $problema->getEquipo_idEquipo();
        $fecha_registro = $problema->getfecha_registro();


        $sql = "INSERT INTO problema (problema,Equipo_idEquipo,fecha_registro) VALUES ('$problema','$Equipo_idEquipo','$fecha_registro')";

        $stmt = $this->db->prepare($sql);

        $result = $stmt->execute();

        if (!$result) {

            throw new Exception("couldnotsaverecord");
        } else {

            echo "GUARDADOBIEN";
        }
    }

    public function eliminar(problema $problema) {
        $idProblema = $problema->getidProblema();


        $sql = "DELETE FROM problema WHERE idProblema = $idProblema ";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if (!$result) {
            throw new Exception("No se pudo eliminar");
        } else {
            echo "eliminado con exito";
        }
    }

    public function listarProblemaPen()
    {
        $sql = "SELECT * FROM problema p LEFT JOIN solucion s ON ( p.idProblema = s.problema_idProblema) WHERE s.problema_idProblema IS NULL";

        $results = array();

        foreach ($this->db->query($sql) as $fila) {

            array_push($results, new problema($fila));
        }

        return $results;
    }

    public function listarSolucionados() {
        
        $sql = "SELECT * FROM problema p LEFT JOIN solucion s ON ( p.idProblema = s.problema_idProblema) INNER JOIN estados_solucion es ON (s.estados_solucion_id = es.id)";

        $results = array();

        foreach ($this->db->query($sql) as $fila) {
            $s = new solucion($fila);
            $e = new estados_solucion($fila);
            $p = new problema($fila);
            $s->setproblema_idProblema($p);
            $s->setestados_solucion_id($e);
            array_push($results, $s);
        }

        return $results;
    }
}
