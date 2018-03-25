<?php

include_once dirname(__FILE__) . '\Mapper.php';

include_once substr(getcwd(), 0, 26) . '\entity\usuario.php';

class usuarioMapper extends Mapper {

    public function listarusuario() {

        $sql = "SELECT Id, Nombre, Contraseña, Estado, correo, Cargo_id FROM usuario";

        $results = array();

        foreach ($this->db->query($sql) as $fila) {

            array_push($results, new usuario($fila));
        }

        return $results;
    }

    public function crearusuario(usuario $usuario) {
        $Nombre = $usuario->getNombre();
        $Contraseña = $usuario->getContraseña();
        $Estado = $usuario->getEstado();
        $correo = $usuario->getcorreo();
        $Cargo_id = $usuario->getCargo_id();


        $sql = "INSERT INTO usuario (Nombre,Contraseña,Estado,correo,Cargo_id) VALUES ('$Nombre','$Contraseña','$Estado','$correo','$Cargo_id')";

        $stmt = $this->db->prepare($sql);

        $result = $stmt->execute();

        if (!$result) {

            throw new Exception("couldnotsaverecord");
        } else {

            echo "GUARDADOBIEN";
        }
    }

    public function eliminar(usuario $usuario) {
        $Id = $usuario->getId();


        $sql = "DELETE FROM usuario WHERE Id = $Id ";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if (!$result) {
            throw new Exception("No se pudo eliminar");
        } else {
            echo "eliminado con exito";
        }
    }
    
    public function validar(usuario $usuario) {
        $id = $usuario->getCargo_id();
        $con = $usuario->getContraseña();
       // echo $id ." ". $con;
        $sql = "SELECT * FROM usuario WHERE Cargo_id = $id AND Contrasena = '$con'";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if (!$result) {
            throw new Exception("No se pudo eliminar");
        } else {
            return $stmt->fetchAll();            
        }
        
    }

}
