<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>tipo_impresion</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $tipo_impresion = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$tipo_impresion->getid().'</td>';
$var .= '<td>'.$tipo_impresion->gettipo_impresion().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
