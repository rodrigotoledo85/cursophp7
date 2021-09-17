<?php
class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }
    public function getMotor():float{
        return $this->motor;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getAno():int{
        return $this->ano;
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("2.0");
$gol->setAno("2017");

var_dump($gol->exibir());