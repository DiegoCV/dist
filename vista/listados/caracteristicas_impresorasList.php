<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>caracteriscas_red_id</th>
<th>tipo_impresion_id</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $caracteristicas_impresoras = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$caracteristicas_impresoras->getid().'</td>';
$var .= '<td>'.$caracteristicas_impresoras->getcaracteriscas_red_id().'</td>';
$var .= '<td>'.$caracteristicas_impresoras->gettipo_impresion_id().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
