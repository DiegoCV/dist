<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id_tipo_equipo</th>
<th>nombre</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $tipo_equipo = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$tipo_equipo->getid_tipo_equipo().'</td>';
$var .= '<td>'.$tipo_equipo->getnombre().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
