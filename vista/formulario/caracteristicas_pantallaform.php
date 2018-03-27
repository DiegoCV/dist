<input type="text" name="pulgadas" value="" placeholder="pulgadas" />
<select id="tipo_pantalla" name="tipo_pantalla_id">
<?php
include_once substr(getcwd(), 0, 26) . '\controller\tipo_pantallaController.php';
$var = new tipo_pantallaController();
$var->listar();
?>
</select>


