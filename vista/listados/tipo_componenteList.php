<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>nombre</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $tipo_componente = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$tipo_componente->getid().'</td>';
$var .= '<td>'.$tipo_componente->getnombre().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
