<?php

// Certifique-se de que todas as classes estão sendo carregadas corretamente
require_once 'NFDao.php';
require_once 'CalculadorDeImpostos.php';
require_once 'EntregadorNFs.php';
require_once 'NotaFiscal.php';

class DespachadorDeNotasFiscais {
    private NFDao $dao;
    private CalculadorDeImposto $impostos;
    private EntregadorDeNFs $entregador;

    // Construtor com as dependências injetadas
    public function __construct(NFDao $dao, CalculadorDeImposto $impostos, EntregadorDeNFs $entregador) {
        $this->dao = $dao;
        $this->impostos = $impostos;
        $this->entregador = $entregador;
    }

    // Método processa Nota Fiscal
    public function processa(NotaFiscal $nf) {
        // Calcula o imposto da Nota Fiscal
        $imposto = $this->impostos->para($nf);
        
        // Define o imposto na Nota Fiscal
        $nf->setImposto($imposto);
        
        // Usando DIP: delega a responsabilidade de entrega
        $this->entregador->entregar($nf);
        
        // Persiste a Nota Fiscal no DAO
        $this->dao->persiste($nf);
    }
}
