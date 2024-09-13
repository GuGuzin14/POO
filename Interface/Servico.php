<?php
class Servico implements OrcavelInterface
{
    private $descricao;
    private $preco;

    public function __construct($descricao, $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }
    //este metodo é o que esta descrito na interface é obrigatoria a implementação de logica aqui, nesta classe
    
    public function getPreco()
    {
        return $this->preco;
    }
}