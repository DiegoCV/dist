<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>software_idSoftware</th>
<th>equipo_idEquipo</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $software_has_equipo = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$software_has_equipo->getsoftware_idSoftware().'</td>';
$var .= '<td>'.$software_has_equipo->getequipo_idEquipo().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
