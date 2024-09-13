<?php
    function Somar()
    {//passagem de parâmetro por valor
        $a = 5;
        $b = 10;
        $resultado = $a + $b;
        return $resultado;
    }
    //chamada da função
    echo "A soma é " . Somar();
    $r = Somar();
    //echo "A soma em r é " . $r;
    if ($r > 10)
        echo "<br>É maior que 10";
