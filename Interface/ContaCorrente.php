<?php
class ContaCorrente implements TributavelInterface
{
    private $saldo;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
    }

    public function calculaTributos()
    {
        return $this->saldo * 0.05;
    }
}
?>
