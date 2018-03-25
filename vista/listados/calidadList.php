<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>idcalidad</th>
<th>clave</th>
<th>bloquea</th>
<th>bloqueu_automatico</th>
<th>copia_seguridad</th>
<th>antivirus</th>
<th>progra_no_autorizado</th>
<th>comparte_archivos</th>
<th>cuenta_adm</th>
<th>observaciones</th>
<th>equipo_idEquipo</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $calidad = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$calidad->getidcalidad().'</td>';
$var .= '<td>'.$calidad->getclave().'</td>';
$var .= '<td>'.$calidad->getbloquea().'</td>';
$var .= '<td>'.$calidad->getbloqueu_automatico().'</td>';
$var .= '<td>'.$calidad->getcopia_seguridad().'</td>';
$var .= '<td>'.$calidad->getantivirus().'</td>';
$var .= '<td>'.$calidad->getprogra_no_autorizado().'</td>';
$var .= '<td>'.$calidad->getcomparte_archivos().'</td>';
$var .= '<td>'.$calidad->getcuenta_adm().'</td>';
$var .= '<td>'.$calidad->getobservaciones().'</td>';
$var .= '<td>'.$calidad->getequipo_idEquipo().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
