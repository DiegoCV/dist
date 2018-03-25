<?php

include_once substr(getcwd(), 0, 26) . '\entity\problema.php';
include_once substr(getcwd(), 0, 26) . '\mapper\problemaMapper.php';
include_once substr(getcwd(), 0, 26) . '\core\Render.php';

class problemaController {

    /**
     * Permite guardar un objeto tipo problema.
     * La informacion llego por post asumiendo la estructura de las entidades .
     *
     */
    public function crear() {
        $problema = new problema($_POST['data']);
        $problemaMapper = new problemaMapper();
        var_dump($problemaMapper->crearproblema($problema));
    }

    public function listar() {
        $problemaMapper = new problemaMapper();
        $problema = $problemaMapper->listarproblema();
        $render = new Render('listados/problemaList', $problema);
        $render->mostrar();
    }

    public function actualizar() {
        
    }

    public function eliminar() {
        $problema = new problema();

        $problema->setidProblema($_POST['data']['idProblema']);

        $problemaMapper = new problemaMapper();
        $problemaMapper->eliminar($problema);
    }

    public function formeliminar() {
        $render = new Render('formuEliminar/problemaEliminar');
        $render->mostrar();
    }

    public function crearForm() {
        $render = new Render('formulario/problemaform');
        $render->mostrar();
    }
    
    public function listarProblemaSolucion() {
        $problemaMapper = new problemaMapper();
        $problema = $problemaMapper->listarProblemaSolucion();
        $render = new Render('listados/problemaList', $problema);
        $render->mostrar();
    }

}
