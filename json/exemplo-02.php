<?php
$json = '[{"nome":"Rodrigo","sobrenome":"Toledo","idade":"36"},{"nome":"Samuel","sobrenome":"Toledo","idade":"3"}]';

$data = json_decode($json, true);

var_dump($data);