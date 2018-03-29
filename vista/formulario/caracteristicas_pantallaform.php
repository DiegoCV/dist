<input type="text" name="pulgadas" value="" placeholder="pulgadas" />
<select id="tipo_pantalla_id" name="tipo_pantalla_id">
<?php
//include_once substr(getcwd(), 0, 26) . '\controller\tipo_pantallaController.php';
//$var = new tipo_pantallaController();
//$var->listar();
?>
</select>
<script src=<?php Way::ruta('assets/js/jquery.min.js') ?>></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.post("/dist/tipo_pantalla/listar",
                function (data, status) {
                    $('#tipo_pantalla_id').html(data);
                });
    });

</script>

