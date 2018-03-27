<?php

include_once substr(getcwd(), 0, 26) . '\entity\caracteristicas_pantalla.php';
include_once substr(getcwd(), 0, 26) . '\mapper\caracteristicas_pantallaMapper.php';
include_once substr(getcwd(), 0, 26) . '\core\Render.php';

class caracteristicas_pantallaController {

    /**
     * Permite guardar un objeto tipo caracteristicas_pantalla.
     * La informacion llego por post asumiendo la estructura de las entidades .
     *
     */
    public function crear() {
        $caracteristicas_pantalla = new caracteristicas_pantalla($_POST['data']);
        $caracteristicas_pantallaMapper = new caracteristicas_pantallaMapper();
        return $caracteristicas_pantallaMapper->crearcaracteristicas_pantalla($caracteristicas_pantalla);
    }

    public function listar() {
;
        $caracteristicas_pantallaMapper = new caracteristicas_pantallaMapper();
        $caracteristicas_pantalla = $caracteristicas_pantallaMapper->listarcaracteristicas_pantalla();
        $render = new Render('listados/caracteristicas_pantallaList', $caracteristicas_pantalla);
        $render->mostrar();
    }

    public function actualizar() {
        
    }

    public function eliminar() {
        $caracteristicas_pantalla = new caracteristicas_pantalla();

        $caracteristicas_pantalla->setid($_POST['data']['id']);

        $caracteristicas_pantallaMapper = new caracteristicas_pantallaMapper();
        $caracteristicas_pantallaMapper->eliminar($caracteristicas_pantalla);
    }

    public function formeliminar() {
        $render = new Render('formuEliminar/caracteristicas_pantallaEliminar');
        $render->mostrar();
    }

    public function crearForm() {
        $render = new Render('formulario/caracteristicas_pantallaform');
        $render->mostrar();
    }

}
