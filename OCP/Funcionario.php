<?php
class Funcionario {
    public $nome;
    public $salario;
    private $salarioCalculado;

    public function __construct($nome, $salario, CalculadoraSalarios $salarioCalculado) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->salarioCalculado = $salarioCalculado;
    }

    public function getSalario() {
        return $this->salarioCalculado->calcularSalario($this);
    }
}
