<?php

require_once 'Cesta.php';
require_once 'Produto.php';

$c1 = new Cesta;

$p1 = new Produto("Impressora", 5, 600);
$p2 = new Produto("Monitor",10, 4000);
$p3 = new Produto("Mouse", 20, 80);

$c1->addItem($p1);// realizando a agregação
$c1->addItem($p2);
$c1->addItem($p3);

foreach ($c1->getItens() as $item)
{
    print "Item: {$item->getNome()} <br>";
}

echo '<pre>';
print_r($c1);
echo '</pre>';
