<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>Id</th>
<th>Nombre</th>
<th>Contraseña</th>
<th>Estado</th>
<th>correo</th>
<th>Cargo_id</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $usuario = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$usuario->getId().'</td>';
$var .= '<td>'.$usuario->getNombre().'</td>';
$var .= '<td>'.$usuario->getContraseña().'</td>';
$var .= '<td>'.$usuario->getEstado().'</td>';
$var .= '<td>'.$usuario->getcorreo().'</td>';
$var .= '<td>'.$usuario->getCargo_id().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
