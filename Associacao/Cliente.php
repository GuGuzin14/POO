<?php
class Cliente{
    private $nome;
    private $endereco;
    private $rg;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setRg($rg)
    {
        $this->rg = $rg;
    }
    public function getRg()
    {
        return $this->rg;
    }
}