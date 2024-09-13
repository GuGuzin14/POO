<?php
    function Somar($x, $y)
    {//passagem de parâmetro por valor
        $resultado = $x + $y;
        return $resultado;
    }    //chamada da função
    $a = 5;
    $b = 10;
    echo "A soma é " . Somar($a,$b);
    $r = Somar($a,$b);
    //echo "A soma em r é " . $r;
    if ($r > 10)
        echo "<br>É maior que 10";
