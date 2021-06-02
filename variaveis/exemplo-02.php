<?php

$nome = "Rodrigo";
$sobrenome = "Toledo";
$anoNascimento = 1985;
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "</br>";
echo $anoNascimento;

unset($nomeCompleto, $anoNascimento);

if(isset($nomeCompleto, $anoNascimento)){
    echo $nomeCompleto, $anoNascimento;
}
?>