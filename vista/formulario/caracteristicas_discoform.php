
<input type="text" name="gb" value="" placeholder="gb" />

<input type="text" name="conexion" value="" placeholder="conexion" />

<select name="tipoDisco_id" id="tipoDisco_id">
	
</select>
<script src=<?php Way::ruta('assets/js/jquery.min.js') ?>></script>
<script type="text/javascript">
$(document).ready(function () {
$.post("/dist/tipodisco/listar",
function (data, status) {
$('#tipoDisco_id').html(data);
});
});

</script>