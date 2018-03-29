<?php

for ($index = 0; $index < count($this->datos); $index++) {
    $tipo_pantalla = $this->datos[$index];
    echo '<option value="' . $tipo_pantalla->getidTipo_pantalla() . '">' . $tipo_pantalla->gettipo_pantalla() . '</option>';
}
?>
   