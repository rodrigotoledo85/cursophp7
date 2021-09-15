<?php
$nome = "Rodrigo";
$sobrenome = "Toledo";
$dataNascimento = "22/08/1985";
$idade = 35;

//apagar conteudo de uma variavel
unset($sobrenome);

//validar se uma variavel esta com um valor definido
if(isset($sobrenome)){
    var_dump($nome." " .$sobrenome);
    echo  "</br>";
}else{
    var_dump($nome);
    echo  "</br>";
}

var_dump("Data nascimento: ".$dataNascimento);
echo  "</br>";
var_dump("Idade: " .$idade. "anos");
?>