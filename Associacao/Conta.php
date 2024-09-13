<?php
class Conta{
    private $numero;
    private $saldo;
    private $titular;//associação com a classe Cliente

    public function setTitular(Cliente $cliente){
        $this->setTitular = $cliente;
    }
    public function getTitular(){
        return $this->titular;
    }
    
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
}
