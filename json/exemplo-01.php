<?php
$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Rodrigo',
    'sobrenome'=>'Toledo',
    'idade'=>'36'
));

array_push($pessoas, array(
    'nome'=>'Samuel',
    'sobrenome'=>'Toledo',
    'idade'=>'3'
));

echo json_encode($pessoas);