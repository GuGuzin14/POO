<?php  
require_once 'OrcavelInterface.php';
require_once 'TributavelInterface.php';
require_once 'Servico.php';
require_once 'Produto.php';
require_once 'Orcamento.php';
require_once 'ContaCorrente.php';
require_once 'SeguroDeVida.php';
require_once 'TotalizadorDeTributos.php';

// Testando Orcamento
$orc = new Orcamento();  
$orc->adiciona(new Produto('Teclado', 10, 200), 2);  
$orc->adiciona(new Produto('Impressora', 15, 500), 2);  
$orc->adiciona(new Produto('Monitor', 200, 900), 1);  
$orc->adiciona(new Servico('Formatação', 200), 1);
$orc->adiciona(new Servico('Instalação', 100), 1);  

echo 'Total Orcamento: R$ ' . $orc->calculTotal() . "\n";


$conta = new ContaCorrente(2600);
$seguro = new SeguroDeVida();

echo '<br>Imposto ContaCorrente: R$ ' . $conta->calculaTributos() . "\n";
echo '<br>Imposto SeguroDeVida: R$ ' . $seguro->calculaTributos() . "\n";


$totalizador = new TotalizadorDeTributos();
$totalizador->adiciona($conta);
$totalizador->adiciona($seguro);

echo '<br>Total de Tributos: R$ ' . $totalizador->getTotal() . "\n";
?>
