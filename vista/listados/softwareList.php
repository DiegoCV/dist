<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>idSoftware</th>
<th>Tipo_Software_idTipo_Software</th>
<th>fecha_vencimiento</th>
<th>version</th>
<th>nombre</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $software = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$software->getidSoftware().'</td>';
$var .= '<td>'.$software->getTipo_Software_idTipo_Software().'</td>';
$var .= '<td>'.$software->getfecha_vencimiento().'</td>';
$var .= '<td>'.$software->getversion().'</td>';
$var .= '<td>'.$software->getnombre().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
