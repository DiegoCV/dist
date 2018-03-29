<?php
foreach ($this->datos as $key => $value) {
 echo '<option value="' . $value->getidTipoDisco() . '">' . $value->gettipoDiscocol() . '</option>';
}
?>

