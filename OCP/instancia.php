<?php
require_once "CalculadoraSalarios.php";
require_once "Funcionario.php";
require_once "FuncionarioContrato.php";
require_once "FuncionarioPermanente.php";

$fc = new Funcionario('jack',1200,new FuncionarioContrato());
echo 'Nome: '. $fc->nome.'<br>- Salario: '.$fc->getSalario();

$fp = new Funcionario('Maria', 5000, new FuncionarioPermanente());
echo '<br>Nome: '.$fp->nome.'<br> - Salário: '.$fp->getSalario();