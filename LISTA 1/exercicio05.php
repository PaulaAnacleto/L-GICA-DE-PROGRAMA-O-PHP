<?php
    $pontos = 100;
    $vitoria = 5;
    $derrota = 2;

    $pontos_final += $pontos + ($vitorias * 20);
    $pontos_final -= $pontos - ($derrotas * 15);


    echo "Pontuação inicial: $pontos pontos<br>";
    echo "Pontuação final: $pontos_final pontos<br>";
?>