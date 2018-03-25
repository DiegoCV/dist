<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>Id</th>
<th>Nombre</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $cargo = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$cargo->getId().'</td>';
$var .= '<td>'.$cargo->getNombre().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
