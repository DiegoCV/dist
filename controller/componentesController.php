<?php

include_once substr(getcwd(), 0, 26) . '\entity\componentes.php';
include_once substr(getcwd(), 0, 26) . '\entity\caracteristicas_pantalla.php';
include_once substr(getcwd(), 0, 26) . '\mapper\componentesMapper.php';
include_once substr(getcwd(), 0, 26) . '\core\Render.php';
include_once 'caracteristicas_pantallaController.php';;
class componentesController {

    /**
     * Permite guardar un objeto tipo componentes.
     * La informacion llego por post asumiendo la estructura de las entidades .
     *
     */
    public function crear() {
        $componentes = new componentes($_POST['data']);
        switch ($_POST['tipoComponente']) {
            case 0:
                # code...
                break;
            case 1:
                $pantallaController = new caracteristicas_pantallaController();
                $ff = $pantallaController->crear();
                echo 'mi primer id'.$ff;
                break;
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;
            case 0:
                # code...
                break;        
            default:
                # code...
                break;
        }
        
        $componentesMapper = new componentesMapper();
        var_dump($componentesMapper->crearcomponentes($componentes));
    }

    public function listar() {
;
        $componentesMapper = new componentesMapper();
        $componentes = $componentesMapper->listarcomponentes();
        $render = new Render('listados/componentesList', $componentes);
        $render->mostrar();
    }

    public function actualizar() {
        
    }

    public function eliminar() {
        $componentes = new componentes();

        $componentes->setid($_POST['data']['id']);
        $componentes->setserial($_POST['data']['serial']);

        $componentesMapper = new componentesMapper();
        $componentesMapper->eliminar($componentes);
    }

    public function formeliminar() {
        $render = new Render('formuEliminar/componentesEliminar');
        $render->mostrar();
    }

    public function crearForm() {
        $tipo = $_POST['tipo'];      
        $render = new Render('formulario/componentesform',array(
            'tipo'=>$tipo
        ));
        $render->mostrar();
    }

}
