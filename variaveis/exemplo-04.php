<?php
//fazer um cast de string para int
$nome = (int)$_GET["a"];
var_dump($nome);
echo "</br>";

//pegar o ip do cliente
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
echo "</br>";

//pegar o diretorio que esta sendo executado o arquivo
$script = $_SERVER["SCRIPT_NAME"];
echo $script;
echo "</br>";
?>