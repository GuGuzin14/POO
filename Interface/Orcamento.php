<?php
class Orcamento
{
    private $itens;//vetor

    public function adiciona(OrcavelInterface $item, $qtde)
    {
        $this->itens[] = [$qtde, $item];
    }
    public function calculTotal()
    {
        $total = 0;
        foreach ($this->itens as $ite){
            $total += $ite[0] * $ite[1]->getPreco();
        }
        return $total;
    }
}
?>