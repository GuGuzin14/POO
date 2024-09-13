<?php
    function Somar($x, $y)
    {//passagem de parâmetro por valor
        $resultado = $x + $y;
        echo "A soma é " . $resultado;
    }
    //chamada da função
    $a = 5;
    $b = 10;
    echo 'x: '. $x;
    Somar($a, $b);
