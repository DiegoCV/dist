<?php

include_once substr(getcwd(), 0, 26) . '\entity\tipo_impresion.php';
include_once substr(getcwd(), 0, 26) . '\mapper\tipo_impresionMapper.php';
include_once substr(getcwd(), 0, 26) . '\core\Render.php';

class tipo_impresionController {

    /**
     * Permite guardar un objeto tipo tipo_impresion.
     * La informacion llego por post asumiendo la estructura de las entidades .
     *
     */
    public function crear() {
        $tipo_impresion = new tipo_impresion($_POST['data']);
        $tipo_impresionMapper = new tipo_impresionMapper();
        var_dump($tipo_impresionMapper->creartipo_impresion($tipo_impresion));
    }

    public function listar() {
        $tipo_impresionMapper = new tipo_impresionMapper();
        $tipo_impresion = $tipo_impresionMapper->listartipo_impresion();
        $render = new Render('listados/tipo_impresionList', $tipo_impresion);
        $render->mostrar();
    }

    public function actualizar() {
        
    }

    public function eliminar() {
        $tipo_impresion = new tipo_impresion();

        $tipo_impresion->setid($_POST['data']['id']);

        $tipo_impresionMapper = new tipo_impresionMapper();
        $tipo_impresionMapper->eliminar($tipo_impresion);
    }

    public function formeliminar() {
        $render = new Render('formuEliminar/tipo_impresionEliminar');
        $render->mostrar();
    }

    public function crearForm() {
        $render = new Render('formulario/tipo_impresionform');
        $render->mostrar();
    }

}
