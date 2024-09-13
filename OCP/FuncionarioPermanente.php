<?php
class FuncionarioPermanente implements CalculadoraSalarios {
    public function calcularSalario(Funcionario $funcionario) {
        return $funcionario->salario * 1.3; 
    }
}