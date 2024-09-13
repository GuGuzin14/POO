<?php
class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function depositar($quantia)
    {
        if ($quantia > 0)
            $this->saldo += $quantia;
    }
}