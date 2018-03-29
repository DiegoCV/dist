<?php
include_once 'caracteriscas_redform.php';
?>
<select id="tipo_impresion_id" name="tipo_impresion_id">
<?php
//include_once substr(getcwd(), 0, 26) . '\controller\tipo_impresionController.php';
//$var = new tipo_impresionController();
//$var->listar();
?>
</select>
<script src=<?php Way::ruta('assets/js/jquery.min.js') ?>></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.post("/dist/tipo_impresion/listar",
                function (data, status) {
                    $('#tipo_impresion_id').html(data);
                });
    });

</script>



