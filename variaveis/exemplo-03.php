<?php

//tipos basicos de variaveis
$nome = "Rodrigo";
$site = 'www.site.com.br';
$ano = 1985;
$salario = 5500.99;
$bloqueado = false;

echo $nome. "</br>" .$site. "</br>" .$ano. "</br> R$: " .$salario. "</br>" .$bloqueado. "</br>";

//tipos compostos de variaveis
$frutras = array("Abacaxi", "Manga", "Kwi", "Laranja", 12);
var_dump($frutras);
echo "</br>";
echo $frutras[2];
echo "</br>";

$dataAtual = new DateTime();
var_dump($dataAtual);
echo "</br>";

//tipos especiais de variaveis
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);
echo "</br>";

$nulo = NULL;
var_dump($nulo);
$vazio = ""; 
?>