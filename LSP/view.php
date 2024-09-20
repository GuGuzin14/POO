<?php

require 'Conta.php';
require 'ContaCorrente.php';
require 'ContaPoupanca.php';

function realizarSaque(Conta $conta, $valor){
    $conta->sacar($valor);
    echo "Novo Saldo: " .$conta->getSaldo() . "\n";
}

$contaCorrente = new ContaCorrente(1000);
realizarSaque($contaCorrente,200);

$contaPoupanca = new ContaPoupanca(750);
realizarSaque($contaPoupanca, 100);