<?php
class Produto implements OrcavelInterface
{
    private $nome;
    private $estoque;
    private $preco;
    
    public function __construct($nome, $estoque,$preco)
    {
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }
    //este metodo é o que esta descrito na interface é obrigatoria a implementação de logica aqui, nesta classe
    
    public function getPreco()
    {
        return $this->preco;
    }
}