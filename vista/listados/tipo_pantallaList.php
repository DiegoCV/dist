<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>tipo_pantalla</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $tipo_pantalla = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$tipo_pantalla->getid().'</td>';
$var .= '<td>'.$tipo_pantalla->gettipo_pantalla().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
