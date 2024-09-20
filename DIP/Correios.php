<?php
interface Correios {
    public function enviaPorSedex10(NotaFiscal $nf);
    public function enviaPorSedexComum(NotaFiscal $nf);
}
