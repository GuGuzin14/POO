<?php
require_once 'Conta.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$p = new ContaPoupanca("090-7","10.450-2", 1000);
echo '<pre>';
var_dump($p);
echo '</pre>';

echo 'Saldo poupança R$'.$p->getSaldo().'<br>';
$p->depositar(100);
echo 'Saldo poupança após depósito R$'.$p->getSaldo().'<br>';
$p->retirar(20);
echo 'Saldo poupança após a retirada R$'.$p->getSaldo().'<br>';

$c = new ContaCorrente("084-3","12.600-2", 500, 100);
echo '<pre>';
var_dump($c);
echo '</pre>';

echo 'Saldo corrente R$'.$c->getSaldo().'<br>';
$c->depositar(100);
echo 'Saldo corrente após depósito R$'.$c->getSaldo().'<br>';
$c->retirar(300);
echo 'Saldo corrente após retirada R$'.$c->getSaldo().'<br>';