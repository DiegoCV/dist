<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>gb</th>
<th>tipo</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $caracteristicas_memoria = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$caracteristicas_memoria->getid().'</td>';
$var .= '<td>'.$caracteristicas_memoria->getgb().'</td>';
$var .= '<td>'.$caracteristicas_memoria->gettipo().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
