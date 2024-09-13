<?php
    $p1 = 10;
    $p2 = 10;
    $media = ($p1 + $p2) / 2;
    echo "Média final: " . $media;
    if ($media >= 6 && $media < 10) {
        echo "<br>Aluno aprovado";
    }
    elseif ($media == 0){
        echo "<br>Nota inválida";
    }
    elseif ($media == 10){
        echo "<br>Nota máxima";
    }
    else{
        echo "<br>Aluno reprovado";
    }
?>