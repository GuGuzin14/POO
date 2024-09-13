<?php
class Produto
{
    private $nome;
    private $estoque;
    private $preco;

    public function __construct($nome, $estoque, $preco)
    {
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }
    public function getNome()
    {
        return $this->nome;
    }
}