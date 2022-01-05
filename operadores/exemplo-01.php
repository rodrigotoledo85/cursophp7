<?php
//operador de atribuicao
$nome = "Rodrigo";
echo $nome;
echo "</br>";

//operador de concatenacao
$cidade = "Abaeté";
echo $cidade . " - MG";
echo "</br>";
echo $nome .= " Toledo";
echo "</br>";

$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 200;
$valorTotal *= .9;
echo $valorTotal;
echo "</br>";

//operadores aritmeticos
$a = 10;
$b = 2;
$c = 10.0;
$d = NULL;
$e = NULL;

echo $a + $b;
echo "</br>";
echo $a - $b;
echo "</br>";
echo $a * $b;
echo "</br>";
echo $a / $b;
echo "</br>";
echo $a % $b;
echo "</br>";
echo $a ** $b;
echo "</br>";

//operadores de comparacao
var_dump($a > $b);
echo "</br>";
var_dump($a < $b);
echo "</br>";
//compara se os valores sao iguais
var_dump($a == $c);
echo "</br>";
//compra se os tipos sao iguais
var_dump($a === $c);
echo "</br>";

var_dump($a != $c);
echo "</br>";

var_dump($a !== $c);
echo "</br>";

var_dump($a <=> $b);
echo "</br>";

echo $e ?? $d ?? $a;
?>