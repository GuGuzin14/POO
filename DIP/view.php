<?php

// Incluímos todos os arquivos necessários
require_once 'Correios.php';
require_once 'LeiDeEntrega.php';
require_once 'NFDao.php';
require_once 'CalculadorDeImpostos.php';
require_once 'EntregadorNFs.php';
require_once 'NotaFiscal.php';
require_once 'DespachadorDeNotasFiscais.php';  // Inclua o caminho correto para o arquivo


// Implementação da classe Correios
class CorreiosImpl implements Correios {
    public function enviaPorSedex10(NotaFiscal $nf) {
        echo "Nota Fiscal enviada por SEDEX 10.\n";
    }

    public function enviaPorSedexComum(NotaFiscal $nf) {
        echo "Nota Fiscal enviada por SEDEX Comum.\n";
    }
}

// Implementação da Lei de Entrega
class LeiDeEntregaImpl implements LeiDeEntrega {
    public function deveEntregarUrgente(NotaFiscal $nf): bool {
        // Exemplo simples: Se o valor da nota fiscal for maior que 1000, enviar urgente
        return $nf->getValor() > 1000;
    }
}

// Criamos uma instância de Nota Fiscal
$notaFiscal = new NotaFiscal();
$notaFiscal->setValor(800); // Exemplo de valor que vai definir se é urgente ou não

// Instanciamos todas as classes necessárias
$dao = new NFDao();
$calculadorDeImposto = new CalculadorDeImposto();
$correios = new CorreiosImpl();
$leiDeEntrega = new LeiDeEntregaImpl();
$entregador = new EntregadorDeNFs($correios, $leiDeEntrega);

// Criamos o despachador de notas fiscais
$despachador = new DespachadorDeNotasFiscais($dao, $calculadorDeImposto, $entregador);

// Processamos a nota fiscal
$despachador->processa($notaFiscal);
