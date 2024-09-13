<?php
require_once "Conta.php";
require_once "ContaPoupanca.php";
require_once "ContaCorrente.php";

$p = new ContaPoupanca(560, "CP 10.500-3", 100);
$c = new ContaCorrente(600, "CC 23.650-1", 500, 100);

echo $p->mostrarAtributos();

echo $c->mostrarAtributos();
