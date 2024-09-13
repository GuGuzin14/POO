<?php
class ContaPoupanca extends Conta
{
    public function __construct($agencia, $conta, $saldo)
    {
        parent::__construct($agencia, $conta, $saldo);
    }
    
    public function retirar($quantia)
    {
        if ( $this->saldo  >= $quantia)
        {
            $this->saldo -= $quantia;
            return true;
        }
        else
            return false;
    }
}