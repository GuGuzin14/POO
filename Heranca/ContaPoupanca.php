<?php
class ContaPoupanca extends Conta
{
    
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