<?php
class Produto
{
    //declaração dos atributos
    public $codigo;
    public $nome;
    public $preco;

    //declaração dos métodos
    public function MostrarAtributos()
    {
        echo "<br>Código: ".$this->codigo." Nome: ".$this->nome." Preço R$ ".$this->preco;
    }
    public function CalcularAumento($porcentagem)
    {
        $this->preco = $this->preco + ( $this->preco * $porcentagem/100 );
    }
}//término da classe
echo "..........";
$p1 = new Produto;
$p1->codigo = 79;
$p1->nome = "refrigerante";
$p1->preco = 10.5;
$p1->MostrarAtributos();

$p1->CalcularAumento(10);
$p1->MostrarAtributos();
