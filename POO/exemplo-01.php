<?php
class Pessoa{
    public $nome;

    public function falar(){
        return "O meu nome é: " .$this->nome;
    }
}

$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Toledo";
echo $rodrigo->falar();
