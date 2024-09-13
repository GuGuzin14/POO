<?php
class Cesta
{
    private $horas;
    private $itens;

    public function __construct()
    {
        $this->horas = date('Y-m-d H:i:s');
        $this->itens = [];
    }
    public function addItem(Produto $produto)
    { //aqui ocorre a agregação
        $this->itens[] = $produto;
    }
    public function getItens()
    {
        return $this->itens;
    }
}