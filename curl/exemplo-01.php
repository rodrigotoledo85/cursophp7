<?php
$cep = "30310220";

//link viacep: https://viacep.com.br/ws/01001000/json/
//na parte da url que esta o cep coloca a variavel php $cep
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);