<?php
require_once 'Cliente.php';
require_once 'Conta.php';

//instâncias dos objetos
$cliente = new Cliente();
$cliente->setNome("Ana");
$cliente->setEndereco("Rua Terezina, 75");
$cliente->setRg(111);

$conta = new Conta();
$conta->setNumero(1);
$conta->setSaldo(100);
//agora é que ocorre a associação
$conta->setTitular($cliente);

echo '<pre>';
var_dump($cliente);
var_dump($conta);
echo '</pre>';

echo "Número: ".$conta->getNumero()."<br>";
echo "Saldo: ".$conta->getSaldo()."<br>";
//echo "Nome: ".$conta->getTitular()->getNome()."<br>";

