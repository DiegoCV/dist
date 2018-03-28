<?php
foreach ($this->datos as $key => $value) {
 echo '<option value="' . $value->getid() . '">' . $value->gettipoDiscocol() . '</option>';
}
?>

