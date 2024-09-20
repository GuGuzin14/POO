<?php
interface LeiDeEntrega {
    public function deveEntregarUrgente(NotaFiscal $nf): bool;
}
