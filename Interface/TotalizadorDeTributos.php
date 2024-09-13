<?php
class TotalizadorDeTributos
{
    private $total = 0.0;

    public function adiciona(TributavelInterface $ti)
    {
        $this->total += $ti->calculaTributos();
    }

    public function getTotal()
    {
        return $this->total;
    }
}
?>
