<?php
include_once 'caracteriscas_redform.php';
?>
<select id="tipo_impresion">
<?php
include_once substr(getcwd(), 0, 26) . '\controller\tipo_impresionController.php';
$var = new tipo_impresionController();
$var->listar();
?>
</select>
<script src=<?php Way::ruta('assets/js/jquery.min.js') ?>></script>
<!--<script type="text/javascript">
    $(document).ready(function () {
        $.post("/dist/tipo_impresion/listar",
                function (data, status) {
                    $('#tipo_impresion').html(data);
                });
    });

</script>-->



