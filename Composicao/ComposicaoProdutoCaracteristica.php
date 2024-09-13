<?php
require_once "Caracteristica.php";
require_once "Produto.php";

$p = new Produto('Café',5,12);

$p->addCaracteristica('expresso', 'xícara');
$p->addCaracteristica('americano', 'copo');

echo '<pre>';
var_dump($p);
echo '</pre>';

print "Produto: {$p->getNome()} <br>";
foreach ($p->getCaracteristica() as $car)
{
    $nome = $car->getNome();
    $valor = $car->getValor();
    print "Característica {$nome} - {$valor} <br>";
}