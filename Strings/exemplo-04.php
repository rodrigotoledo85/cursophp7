<?php
$frase = "A repetição é mãe da retenção";
//palavra alvo
$palavra = "mãe";

//achar a posicao da palavra alvo
$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);
var_dump($texto);
echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);
echo "<br>";
?>