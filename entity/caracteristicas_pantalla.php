<?php

class caracteristicas_pantalla {

    private $id;
    private $pulgadas;
    private $tipo_pantalla_id;

    public function __construct(array $data = null) {
        if (!is_null($data)) {

            if (array_key_exists('id', $data)) {

                $this->id = $data['id'];
            }

            $this->pulgadas = $data['pulgadas'];
            $this->tipo_pantalla_id = $data['tipo_pantalla_id'];
        }
    }

    public function setid($id) {
        $this->id = $id;
        return $this;
    }

    public function setpulgadas($pulgadas) {
        $this->pulgadas = $pulgadas;
        return $this;
    }

    public function settipo_pantalla_id($tipo_pantalla_id) {
        $this->tipo_pantalla_id = $tipo_pantalla_id;
        return $this;
    }

    public function getid() {
        return $this->id;
    }

    public function getpulgadas() {
        return $this->pulgadas;
    }

    public function gettipo_pantalla_id() {
        return $this->tipo_pantalla_id;
    }

}
