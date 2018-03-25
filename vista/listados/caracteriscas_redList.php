<div class="w3-container"> 

                    <h2>Queria listados? </h2>    

                    <p>Pues se le tienen</p> 

                <table class="w3-table w3-striped w3-border"> 

                <tr> 
 <th>id</th>
<th>ip</th>
<th>mascara</th>
<th>puerta_enlace</th>
<th>dns</th>
<th>dns2</th>
</tr>

                     <?php

                        for ($index = 0; $index < count($this->datos); $index++) {
                            $caracteriscas_red = $this->datos[$index];
                            $var = '<tr>';$var .= '<td>'.$caracteriscas_red->getid().'</td>';
$var .= '<td>'.$caracteriscas_red->getip().'</td>';
$var .= '<td>'.$caracteriscas_red->getmascara().'</td>';
$var .= '<td>'.$caracteriscas_red->getpuerta_enlace().'</td>';
$var .= '<td>'.$caracteriscas_red->getdns().'</td>';
$var .= '<td>'.$caracteriscas_red->getdns2().'</td>';
$var .= '</tr>';

                            echo $var;

                            $var = '';

                        }

                    ?>

                     </table>

                    </div>
