<?php
$data = $this->datos;
$tipo = "";
switch ($data['tipo']) {
    case 1:
        $tipo = "caracteristicas_pantallaform.php";
        break;
    case 2:
        $tipo = "caracteristicas_memoriaform.php";
        break;
    case 3:
        $tipo = "caracteristicas_discoform.php";
        break;
    case 4:
        $tipo = "caracteristicas_portatilform.php";
        break;
    case 5:
        $tipo = "caracteristicas_todoenunoform.php";
        break;
    case 6:
        $tipo = "caracteristicas_impresorasform.php";
        break;
    default:
        break;
};
?>

<form action = "" method="POST" id="a">
    <input type="text" name="Equipo_idEquipo" value="null" placeholder="Equipo_idEquipo" hidden="true" />

    <input type="text" name="marca" value="" placeholder="marca" />

    <input type="text" name="modelo" value="" placeholder="modelo" />

    <input type="text" name="serial" value="" placeholder="serial" />

    <input type="text" name="stiker_activo" value="" placeholder="stiker_activo" />

    <input type="date" name="fecha_compra" value="" placeholder="fecha_compra" />

    <input type="text" name="tipo_componente_id" value="<?php echo $tipo ?>" placeholder="tipo_componente_id"  hidden="true"/>

    <?php
    include_once $tipo;
    ?>

<!--    <input type="text" name="caracteristicas_pantalla_id" value="" placeholder="caracteristicas_pantalla_id" />

    <input type="text" name="caracteristicas_memoria_id" value="" placeholder="caracteristicas_memoria_id" />

    <input type="text" name="caracteristicas_disco_id" value="" placeholder="caracteristicas_disco_id" />

    <input type="text" name="caracteristicas_portatil_id" value="" placeholder="caracteristicas_portatil_id" />

    <input type="text" name="caracteristicas_todoenuno_id" value="" placeholder="caracteristicas_todoenuno_id" />

   

    <input type="text" name="caracteristicas_impresoras_id" value="" placeholder="caracteristicas_impresoras_id" />-->
    <input type="submit" value="Enviar" />
</form>
<div id="diegp"></div>
<script type="text/javascript">
    var controller;
    var funcion;
    /**
     * Convierte un serializeArray en Json
     *
     */
    function ordenar(arrayData) {
        var aux = '{';
        for (var i = 0; i < arrayData.length; i++) {
            aux += '"' + arrayData[i]['name'] + '":"' + arrayData[i]['value'] + '",';
        }
        aux = aux.substring(0, aux.length - 1);
        aux += "}";
        return JSON.parse(aux);
    }

    function cargar(control, funt) {
        controller = control;
        funcion = funt;
    }

    $('#a').submit(function (event) {      
        event.preventDefault();
        cargar('componentes', 'crear');
        var dataString = $('#a').serializeArray();
        dataString = ordenar(dataString);
        enviar(dataString);
;

    });

    function enviar(dataString) {
        $.ajax({
            type: 'post',
            data: {
                'data': dataString
            },
            url: '/dist/' + controller + '/' + funcion
        })
                .done(function (listas_rep) {
                    alert(listas_rep);
                    $('#diegp').html(listas_rep);
                })
                .fail(function () {
                    alert('Hubo un errror al cargar las listas_rep');
                });
    }
</script>
