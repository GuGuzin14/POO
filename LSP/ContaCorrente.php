<?php
class ContaCorrente implements Conta{

    protected $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function sacar($valor) {
      if  ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "<br>Saque de R$ {$valor} realizado.\n";
        } else {
            echo "<br>Saldo insuficiente para o saque.\n";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }


}