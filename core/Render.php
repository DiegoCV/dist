<?php

//include 'Way.php';

class Render {
    private $vista;
    private $datos;

    public function __construct($vista, array $datos = null) {
        $this->vista = $vista;
        $this->datos = $datos;
    }

    public function mostrar() {
        $ruta = getcwd();
        $controllerLocation = $ruta . '\vista\\' . $this->vista . '.php';
        if (file_exists($controllerLocation)) {
           include_once $controllerLocation;
        } else {
            throw new Exception("No se encuentra el controlador $controllerLocation");
        }
    }

    
}