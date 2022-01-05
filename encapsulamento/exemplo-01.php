<?php
class Pessoa{
    public $nome = "Rodrigo Toledo";
    protected $idade = 36;
    private $senha = "123";

    public function verDados()
    {
        echo $this->nome. "</br>";
        echo $this->idade. "</br>";
        echo $this->senha. "</br>";
    }
}

$obj = new Pessoa();
//echo $obj->nome. "</br>";
$obj->verDados();