<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>gb</th>
<th>conexion</th>
<th>tipoDisco_id</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $caracteristicas_disco = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$caracteristicas_disco->getid().'</td>';
$var .= '<td>'.$caracteristicas_disco->getgb().'</td>';
$var .= '<td>'.$caracteristicas_disco->getconexion().'</td>';
$var .= '<td>'.$caracteristicas_disco->gettipoDisco_id().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
