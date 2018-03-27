<?php

class componentes {

    private $id;
    private $Equipo_idEquipo;
    private $marca;
    private $modelo;
    private $serial;
    private $stiker_activo;
    private $fecha_compra;
    private $caracteristicas_pantalla_id;
    private $caracteristicas_memoria_id;
    private $caracteristicas_disco_id;
    private $caracteristicas_portatil_id;
    private $caracteristicas_todoenuno_id;
    private $tipo_componente_id;
    private $caracteristicas_impresoras_id;

    public function __construct(array $data = null) {
        if (!is_null($data)) {

            if (array_key_exists('id', $data)) {

                $this->id = $data['id'];
            }

            $this->Equipo_idEquipo = $data['Equipo_idEquipo'];
            $this->marca = $data['marca'];
            $this->modelo = $data['modelo'];
            $this->serial = $data['serial'];
            $this->stiker_activo = $data['stiker_activo'];
            $this->fecha_compra = $data['fecha_compra'];
//            $this->caracteristicas_pantalla_id = $data['caracteristicas_pantalla_id'];
//            $this->caracteristicas_memoria_id = $data['caracteristicas_memoria_id'];
//            $this->caracteristicas_disco_id = $data['caracteristicas_disco_id'];
//            $this->caracteristicas_portatil_id = $data['caracteristicas_portatil_id'];
//            $this->caracteristicas_todoenuno_id = $data['caracteristicas_todoenuno_id'];
            $this->tipo_componente_id = $data['tipo_componente_id'];
//            $this->caracteristicas_impresoras_id = $data['caracteristicas_impresoras_id'];
        }
    }

    public function setid($id) {
        $this->id = $id;
        return $this;
    }

    public function setEquipo_idEquipo($Equipo_idEquipo) {
        $this->Equipo_idEquipo = $Equipo_idEquipo;
        return $this;
    }

    public function setmarca($marca) {
        $this->marca = $marca;
        return $this;
    }

    public function setmodelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }

    public function setserial($serial) {
        $this->serial = $serial;
        return $this;
    }

    public function setstiker_activo($stiker_activo) {
        $this->stiker_activo = $stiker_activo;
        return $this;
    }

    public function setfecha_compra($fecha_compra) {
        $this->fecha_compra = $fecha_compra;
        return $this;
    }

    public function setcaracteristicas_pantalla_id($caracteristicas_pantalla_id) {
        $this->caracteristicas_pantalla_id = $caracteristicas_pantalla_id;
        return $this;
    }

    public function setcaracteristicas_memoria_id($caracteristicas_memoria_id) {
        $this->caracteristicas_memoria_id = $caracteristicas_memoria_id;
        return $this;
    }

    public function setcaracteristicas_disco_id($caracteristicas_disco_id) {
        $this->caracteristicas_disco_id = $caracteristicas_disco_id;
        return $this;
    }

    public function setcaracteristicas_portatil_id($caracteristicas_portatil_id) {
        $this->caracteristicas_portatil_id = $caracteristicas_portatil_id;
        return $this;
    }

    public function setcaracteristicas_todoenuno_id($caracteristicas_todoenuno_id) {
        $this->caracteristicas_todoenuno_id = $caracteristicas_todoenuno_id;
        return $this;
    }

    public function settipo_componente_id($tipo_componente_id) {
        $this->tipo_componente_id = $tipo_componente_id;
        return $this;
    }

    public function setcaracteristicas_impresoras_id($caracteristicas_impresoras_id) {
        $this->caracteristicas_impresoras_id = $caracteristicas_impresoras_id;
        return $this;
    }

    public function getid() {
        return $this->id;
    }

    public function getEquipo_idEquipo() {
        return $this->Equipo_idEquipo;
    }

    public function getmarca() {
        return $this->marca;
    }

    public function getmodelo() {
        return $this->modelo;
    }

    public function getserial() {
        return $this->serial;
    }

    public function getstiker_activo() {
        return $this->stiker_activo;
    }

    public function getfecha_compra() {
        return $this->fecha_compra;
    }

    public function getcaracteristicas_pantalla_id() {
        return $this->caracteristicas_pantalla_id;
    }

    public function getcaracteristicas_memoria_id() {
        return $this->caracteristicas_memoria_id;
    }

    public function getcaracteristicas_disco_id() {
        return $this->caracteristicas_disco_id;
    }

    public function getcaracteristicas_portatil_id() {
        return $this->caracteristicas_portatil_id;
    }

    public function getcaracteristicas_todoenuno_id() {
        return $this->caracteristicas_todoenuno_id;
    }

    public function gettipo_componente_id() {
        return $this->tipo_componente_id;
    }

    public function getcaracteristicas_impresoras_id() {
        return $this->caracteristicas_impresoras_id;
    }

}
