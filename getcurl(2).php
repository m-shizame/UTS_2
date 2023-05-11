<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://harber.mimoapps.xyz/api/getaccess.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$reponse = curl_exec($curl);
curl_close($curl);
$reponse_array = json_decode($reponse,true);

$onscreen = '<table class="table" width="100%">
                <thread>
                    <th>KodeBarang</th>
                    <th>NamaBarang</th>
                    <th>GroupBarang</th>
                    <th>HargaJual</th>
                    <th>Quantity</th>
                </thead>
             ';
 foreach ($reponse_array as $resp) {
    $onscreen.='<tr>
                    <td>'.$resp['KodeBarang'].'</td>
                    <td>'.$resp['NamaBarang'].'</td>
                    <td>'.$resp['GroupBarang'].'</td>
                    <td>'.$resp['HargaJual'].'</td>
                    <td>'.$resp['Quantity'].'</td>
                  </tr>';  
 }      
 $onscreen.='</table>';
 echo $onscreen;      
