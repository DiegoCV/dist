<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>pulgadas</th>
<th>tipo_pantalla_id</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $caracteristicas_pantalla = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$caracteristicas_pantalla->getid().'</td>';
$var .= '<td>'.$caracteristicas_pantalla->getpulgadas().'</td>';
$var .= '<td>'.$caracteristicas_pantalla->gettipo_pantalla_id().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
