<?php
class Conta
{ //private - modificador de acesso ou visibilidade
    private $numero;
    private $titular;
    private $saldo;

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }
    public function getTitular()
    {
        return $this->titular;
    }
    public function Sacar($valorSaque)
    {
        if ($this->saldo >= $valorSaque)
           $this->saldo = $this->saldo - $valorSaque;
    }
    public function Depositar($valorDeposito)
    {
        if ($valorDeposito > 0)
            $this->saldo = $this->saldo + $valorDeposito;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
}//encerrei a classe
$c1 = new Conta;
$c1->setNumero(70);//altera conteúdo do atributo
$c1->setTitular("Ana");
$c1->Depositar(1000);
$c1->Sacar(10);
echo "Número da conta: ".$c1->getNumero()."<br>";//busca conteúdo
echo "Titular da conta: ".$c1->getTitular()."<br>";
echo "Saldo da conta: ".$c1->getSaldo()."<br>";
