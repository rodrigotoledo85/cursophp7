<?php
$nome = "Rodrigo de Melo Toledo";

function teste(){
    global $nome;
    echo $nome;
    echo "</br>";
}

function teste2(){
    $nome = "Samuel Miranda Alvares Toledo";
    echo $nome. " (teste 2)";
}

teste();
teste2();
?>