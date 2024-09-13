<?php
//
class ContaCorrente extends Conta
{
    private $limite;
    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }
    public function retirar($quantia)
    {
        if ( ($this->saldo + $this->limite) >= $quantia)
        {
            $this->saldo -= $quantia;
            return true;
        }
        else
            return false;
    }
    public function mostrarAtributos()
    {//o polimorfismo ocoore na subclasse
        return parent::mostrarAtributos() . "Limite: {$this->limite}<br>";
    }

}