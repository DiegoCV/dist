<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>Equipo_idEquipo</th>
<th>marca</th>
<th>modelo</th>
<th>serial</th>
<th>stiker_activo</th>
<th>fecha_compra</th>
<th>caracteristicas_pantalla_id</th>
<th>caracteristicas_memoria_id</th>
<th>caracteristicas_disco_id</th>
<th>caracteristicas_portatil_id</th>
<th>caracteristicas_todoenuno_id</th>
<th>tipo_componente_id</th>
<th>caracteristicas_impresoras_id</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $componentes = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$componentes->getid().'</td>';
$var .= '<td>'.$componentes->getEquipo_idEquipo().'</td>';
$var .= '<td>'.$componentes->getmarca().'</td>';
$var .= '<td>'.$componentes->getmodelo().'</td>';
$var .= '<td>'.$componentes->getserial().'</td>';
$var .= '<td>'.$componentes->getstiker_activo().'</td>';
$var .= '<td>'.$componentes->getfecha_compra().'</td>';
$var .= '<td>'.$componentes->getcaracteristicas_pantalla_id().'</td>';
$var .= '<td>'.$componentes->getcaracteristicas_memoria_id().'</td>';
$var .= '<td>'.$componentes->getcaracteristicas_disco_id().'</td>';
$var .= '<td>'.$componentes->getcaracteristicas_portatil_id().'</td>';
$var .= '<td>'.$componentes->getcaracteristicas_todoenuno_id().'</td>';
$var .= '<td>'.$componentes->gettipo_componente_id().'</td>';
$var .= '<td>'.$componentes->getcaracteristicas_impresoras_id().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
