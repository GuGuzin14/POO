<?php
class Produto
{
    private $nome;
    private $estoque;
    private $preco;
    private $caracteristica; //relação de composição

    public function __construct($nome, $estoque, $preco)
    {
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->caracteristica = [];//composição
    }
    public function addCaracteristica($nome, $valor)
    {
        $this->caracteristica[] = new Caracteristica($nome, $valor);
    }
    public function getCaracteristica()
    {
        return $this->caracteristica;
    }
    public function getNome()
    {
        return $this->nome;
    }
}