<?php
for ($index = 0; $index < count($this->datos); $index++) {
    $tipo_impresion = $this->datos[$index];
    echo '<option value="' . $tipo_impresion->getid() . '">' . $tipo_impresion->gettipo_impresion().'</option>';
}
?>


