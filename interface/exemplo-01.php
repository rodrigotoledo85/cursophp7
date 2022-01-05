<?php

interface Veiculo{
  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
}

class Civic implements Veiculo{
  public function acelerar($velocidade){
    echo "O veiculo acelerou ate " . $velociodade . " Km/H";
  }

  public function frenar($velocidade){
    echo "O veiculo frenou ate ". $velocidade ." Km/H";
  }

  public function trocarMarcha($marcha){
    echo "O veiculo engatou a ". $marcha ." marcha";
  }
}

$carro = new Civic();
$carro->trocarMarcha(5);
 ?>
