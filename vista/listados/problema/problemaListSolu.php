<table id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th style="display:none;">id</th>
            <th>Id</th>
            <th>Problema</th>
            <th>IdEquipo</th>
            <th>fecha registro</th>
            <th>Estado Solucion</th>
            <th>caracteristica Solucion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($index = 0; $index < count($this->datos); $index++) {
            $solucion = $this->datos[$index];
            $var = '<tr>';
            $var .= '<td>' . $solucion->getproblema_idProblema()->getidProblema() . '</td>';
            $var .= '<td>' . $solucion->getproblema_idProblema()->getproblema() . '</td>';
            $var .= '<td>' . $solucion->getproblema_idProblema()->getEquipo_idEquipo() . '</td>';
            $var .= '<td>' . $solucion->getproblema_idProblema()->getfecha_registro() . '</td>';
            $var .= '<td>' . $solucion->getestados_solucion_id()->getestado() . '</td>';
            $var .= '<td>' . $solucion->getcaracteristica() . '</td>';
            $var .= '</tr>';

            echo $var;

            $var = '';
        }
        ?>
    </tbody>
</table>