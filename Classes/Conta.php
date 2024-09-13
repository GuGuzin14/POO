<?php
class Conta
{
    //declaração dos atributos
    public $numero;
    public $titular;
    public $saldo;

    //declaração dos métodos
    public function Sacar($valorSaque)
    {
        $this->saldo = $this->saldo - $valorSaque;
    }
    public function Depositar($valorDeposito)
    {
        $this->saldo = $this->saldo + $valorDeposito;
    }
    public function MostrarAtributos()
    {
        echo "<br>Número: " . $this->numero;
        echo " Titular: " . $this->titular;
        echo " Saldo: " . $this->saldo;
    }
}
$c1 = new Conta;//instância de objeto
$c1->numero = 1;
$c1->titular = "Ana";
$c1->saldo = 100.12;
$c1->Sacar(10);
$c1->MostrarAtributos();
$c1->Depositar(200);
$c1->MostrarAtributos();
echo "<br>";

$c2 = new Conta;//instância de objeto
$c2->numero = 2;
$c2->titular = "Bia";
$c2->saldo = 200.89;
$c2->Sacar(50);
$c2->MostrarAtributos();
$c2->Depositar(1000);
$c2->MostrarAtributos();
echo "<pre>";
var_dump($c1);
var_dump($c2);
echo "</pre>";