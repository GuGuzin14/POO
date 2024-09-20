<?php
namespace tests;
use PHPUnit\Framework\TestCase;
use app\Calculadora;
class CalculadoraTest extends TestCase
{
     public function test_soma()
    {
        $calc = new Calculadora();
        $this->assertInstanceOf(Calculadora::class, $calc);
        $resultado = $calc->soma(10,5);
        $this->assertEquals(15, $resultado);
    }

    public function test_if_operacoes_is_empty()
    {
        $calc = new Calculadora();
        $this->assertEmpty($calc->getOperacoes());
    }
}
