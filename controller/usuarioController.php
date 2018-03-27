<?php

include_once substr(getcwd(), 0, 26) . '\entity\usuario.php';
include_once substr(getcwd(), 0, 26) . '\mapper\usuarioMapper.php';
include_once substr(getcwd(), 0, 26) . '\core\Render.php';

class usuarioController {

    /**
     * Permite guardar un objeto tipo usuario.
     * La informacion llego por post asumiendo la estructura de las entidades .
     *
     */
    public function crear() {
        $usuario = new usuario($_POST['data']);
        $usuarioMapper = new usuarioMapper();
        var_dump($usuarioMapper->crearusuario($usuario));
    }

    public function listar() {
        ;
        $usuarioMapper = new usuarioMapper();
        $usuario = $usuarioMapper->listarusuario();
        $render = new Render('listados/usuarioList', $usuario);
        $render->mostrar();
    }

    public function actualizar() {
        
    }

    public function eliminar() {
        $usuario = new usuario();

        $usuario->setId($_POST['data']['Id']);

        $usuarioMapper = new usuarioMapper();
        $usuarioMapper->eliminar($usuario);
    }

    public function formeliminar() {
        $render = new Render('formuEliminar/usuarioEliminar');
        $render->mostrar();
    }

    public function crearForm() {
        $render = new Render('formulario/usuarioform');
        $render->mostrar();
    }

    public function validar() {
        $usuario = new usuario();
        $usuario->setCargo_id($_POST['Cargo_id']);
        $usuario->setContraseña(md5($_POST['Contraseña']));
        $usuarioMapper = new usuarioMapper();
        $var = $usuarioMapper->validar($usuario);
        //var_dump($_POST['Contraseña']." ".md5($_POST['Contraseña']));
        if (empty($var)) {
            $render = new Render('index');
            $render->mostrar();
//           header("location: ../vista/index.php");
        } else {
            session_start();
            $_SESSION['id_usuario'] = $var[0][0];
            $_SESSION['cargo_id'] = $var[0][5];
            $_SESSION['nombre_usuario'] = $var[0][1];
            $_SESSION['Correo'] = $var[0][4] ; 
            $render = new Render('home', $var);
            $render->mostrar();
        }
    }

}
