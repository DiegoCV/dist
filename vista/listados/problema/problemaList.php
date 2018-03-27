<table id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th style="display:none;">id</th>
            <th>Id</th>
            <th>Problema</th>
            <th>IdEquipo</th>
            <th>fecha registro</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($index = 0; $index < count($this->datos); $index++) {
            $problema = $this->datos[$index];
            $var = '<tr>';
            $var .= '<td>' . $problema->getidProblema() . '</td>';
            $var .= '<td>' . $problema->getproblema() . '</td>';
            $var .= '<td>' . $problema->getEquipo_idEquipo() . '</td>';
            $var .= '<td>' . $problema->getfecha_registro() . '</td>';
            $var .= '</tr>';

            echo $var;

            $var = '';
        }
        ?>
    </tbody>
</table>

<!--<tr> 
            <th>idProblema</th>
            <th>problema</th>
            <th>Equipo_idEquipo</th>
            <th>fecha_registro</th>
        </tr>
-->