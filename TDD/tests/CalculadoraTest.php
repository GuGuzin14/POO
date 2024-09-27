<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\Calculadora;

class CalculadoraTest extends TestCase
{
    // Testa a soma de dois números, verifica se a instância da classe está correta e se o resultado é o esperado.
    public function test_soma()
    {
        $calc = new Calculadora();
        $this->assertInstanceOf(Calculadora::class, $calc);
        $resultado = $calc->soma(10, 5);
        $this->assertEquals(15, $resultado);
    }

    // Verifica se o array 'operacoes' está vazio ao instanciar a Calculadora, o que significa que ainda não foram feitas operações.
    public function test_if_operacoes_is_empty()
    {
        $calc = new Calculadora();
        $this->assertEmpty($calc->getOperacoes());
    }

    // Testa a adição de números negativos para garantir que a função soma funciona corretamente com valores negativos.
    public function test_soma_numeros_negativos()
    {
        $calc = new Calculadora();
        $resultado = $calc->soma(-10, -5);
        // assertEquals verifica se o valor resultante da soma de -10 e -5 é igual a -15
        $this->assertEquals(-15, $resultado);
    }

    // Testa a soma com números de ponto flutuante para garantir que a função lide corretamente com decimais.
    public function test_soma_com_numeros_decimais()
    {
        $calc = new Calculadora();
        $resultado = $calc->soma(10.5, 5.2);
        // assertEquals verifica se a soma de 10.5 e 5.2 é igual a 15.7
        $this->assertEquals(15.7, $resultado, '', 0.01); // Tolerância de erro para números flutuantes
    }

    // Testa se a função de soma retorna um tipo de dado correto (inteiro ou float).
    public function test_soma_tipo_de_retorno()
    {
        $calc = new Calculadora();
        $resultado = $calc->soma(10, 5);
        // assertIsInt verifica se o resultado da soma de dois inteiros é um número inteiro
        $this->assertIsInt($resultado);

        $resultadoFloat = $calc->soma(10.5, 5.5);
        // assertIsFloat verifica se o resultado da soma de dois números decimais é um float
        $this->assertIsFloat($resultadoFloat);
    }
}
