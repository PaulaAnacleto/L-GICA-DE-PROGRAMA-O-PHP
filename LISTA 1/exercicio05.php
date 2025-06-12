<?php
    $pontos = 100;
    $vitoria = 1;
    $derrota = 1;

    $pontos_final1 = $pontos + ($vitoria * 20);
    $pontos_final2 = $pontos_final1 - ($derrota * 15);


    echo "Pontuação inicial: $pontos pontos<br>";
    echo "Pontuação final: $pontos_final2 pontos<br>";
?>