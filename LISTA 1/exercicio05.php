<?php
    $pontos = 100;
    $vitoria = 1;
    $derrota = 1;

    $pontos_final += $pontos + ($vitoria * 20);
    $pontos_final -= $pontos - ($derrota * 15);


    echo "Pontuação inicial: $pontos pontos<br>";
    echo "Pontuação final: $pontos_final pontos<br>";
?>