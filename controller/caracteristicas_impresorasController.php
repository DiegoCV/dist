<?php

include_once substr(getcwd(), 0, 26) . '\entity\caracteristicas_impresoras.php';
include_once substr(getcwd(), 0, 26) . '\mapper\caracteristicas_impresorasMapper.php';
include_once substr(getcwd(), 0, 26) . '\core\Render.php';

class caracteristicas_impresorasController {

    /**
     * Permite guardar un objeto tipo caracteristicas_impresoras.
     * La informacion llego por post asumiendo la estructura de las entidades .
     *
     */
    public function crear() {
        $caracteristicas_impresoras = new caracteristicas_impresoras($_POST['data']);
        $caracteristicas_impresorasMapper = new caracteristicas_impresorasMapper();
        var_dump($caracteristicas_impresorasMapper->crearcaracteristicas_impresoras($caracteristicas_impresoras));
    }

    public function listar() {
;
        $caracteristicas_impresorasMapper = new caracteristicas_impresorasMapper();
        $caracteristicas_impresoras = $caracteristicas_impresorasMapper->listarcaracteristicas_impresoras();
        $render = new Render('listados/caracteristicas_impresorasList', $caracteristicas_impresoras);
        $render->mostrar();
    }

    public function actualizar() {
        
    }

    public function eliminar() {
        $caracteristicas_impresoras = new caracteristicas_impresoras();

        $caracteristicas_impresoras->setid($_POST['data']['id']);

        $caracteristicas_impresorasMapper = new caracteristicas_impresorasMapper();
        $caracteristicas_impresorasMapper->eliminar($caracteristicas_impresoras);
    }

    public function formeliminar() {
        $render = new Render('formuEliminar/caracteristicas_impresorasEliminar');
        $render->mostrar();
    }

    public function crearForm() {
        $render = new Render('formulario/caracteristicas_impresorasform');
        $render->mostrar();
    }

}
