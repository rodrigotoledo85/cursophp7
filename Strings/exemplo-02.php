<?php
$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor felis, tempor in semper eu. ";

//converter texto da variavel para tudo maiusculo
$texto = strtoupper($texto);
echo $texto;
echo "<br>";
echo "<br>";

//comverter texto da variavel para tudo minusculo
$texto = strtolower($texto);
echo $texto;
echo "<br>";
echo "<br>";

//converte as primeiras letras de cada palavra no texto fica maiusculo
echo ucwords($texto);
echo "<br>";
echo "<br>";

//converte a primeira letra do texto para maiusculo
echo ucfirst($texto);
echo "<br>";
echo "<br>";
?>