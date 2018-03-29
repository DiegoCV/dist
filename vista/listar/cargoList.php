<?php
$var ="";
echo 'aqui';
for ($index = 0; $index < count($this->datos); $index++) {
    $cargo = $this->datos[$index];
    $var .= ' <option value="' . $cargo->getIdCargo() . '">' . $cargo->getIdCargo() . "-" . $cargo->getNombre() . '</option>';
    echo $var;
    $var = '';
}
?>