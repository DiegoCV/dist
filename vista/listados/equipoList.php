<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>idEquipo</th>
<th>usuario_Id</th>
<th>tipo_equipo_id</th>
<th>procesador</th>
<th>memoria</th>
<th>disco</th>
<th>caracteriscas_red_id</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $equipo = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$equipo->getidEquipo().'</td>';
$var .= '<td>'.$equipo->getusuario_Id().'</td>';
$var .= '<td>'.$equipo->gettipo_equipo_id().'</td>';
$var .= '<td>'.$equipo->getprocesador().'</td>';
$var .= '<td>'.$equipo->getmemoria().'</td>';
$var .= '<td>'.$equipo->getdisco().'</td>';
$var .= '<td>'.$equipo->getcaracteriscas_red_id().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
