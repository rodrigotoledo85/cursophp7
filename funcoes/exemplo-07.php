<?php
$pessoa = array(
    'nome'=>'Rodrigo',
    'idade'=>36
);

foreach ($pessoa as &$value) {
    if (gettype($value) === 'integer') $value += 10;
    echo $value ."<br>";
}

print_r($pessoa);