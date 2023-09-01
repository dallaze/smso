<?php
$url = $_ENV["ttps://041d6327-e993-45ab-af63-a93731d8b1ba:FHsrl_va-YF5RDA0yNRhrg@api.blower.io"] . "/messages";
$data = array('to' => '+218926857399', 'message' => 'Hello from Blower.io'); 
$ch = curl_init($url); 

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
