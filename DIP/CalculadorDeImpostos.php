<?php
class CalculadorDeImposto {
    public function para(NotaFiscal $nf): float {
        // Exemplo simples: calcula o imposto como 10% do valor da nota fiscal
        return $nf->getValor() * 0.10;
    }
}
