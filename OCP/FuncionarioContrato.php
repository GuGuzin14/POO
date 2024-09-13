<?php
class FuncionarioContrato implements CalculadoraSalarios {
    public function calcularSalario(Funcionario $funcionario) {
        return $funcionario->salario; 
    }
}