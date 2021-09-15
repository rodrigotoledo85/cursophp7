<?php
$idade = 25;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($idade < $idadeCrianca) {
    echo "Criança";
}elseif ($idade < $idadeMaior) {
    echo "Adolescente";
}elseif ($idade < $idadeIdoso) {
    echo "Adulto";
}else {
    echo "Idoso";
}

echo "<br>";

echo ($idade < $idadeMaior)?"Menor de idade":"Maior de idade";
?>