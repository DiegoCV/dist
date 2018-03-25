<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>problema_idProblema</th>
<th>estados_solucion_id</th>
<th>caracteristica</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $solucion = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$solucion->getid().'</td>';
$var .= '<td>'.$solucion->getproblema_idProblema().'</td>';
$var .= '<td>'.$solucion->getestados_solucion_id().'</td>';
$var .= '<td>'.$solucion->getcaracteristica().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
