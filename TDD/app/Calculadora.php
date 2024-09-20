<?php
namespace app;

class Calculadora{

private array $operacoes=[];

public function getOperacoes(){
    return $this->operacoes;
}

public function soma($a, $b){
    return $a + $b;
}

}