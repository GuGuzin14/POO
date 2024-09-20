<?php
class NotaFiscal {
    private float $valor;
    private float $imposto;

    public function setValor(float $valor) {
        $this->valor = $valor;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function setImposto(float $imposto) {
        $this->imposto = $imposto;
    }

    public function getImposto(): float {
        return $this->imposto;
    }
}
