<?php
    $produto = 100; 
    $desconto = 10/100;
    $desconto_final = $produto * $desconto;

    $valor_final = $produto - $desconto_final;


    echo "Valor do produto = R$". $produto . "<br>";
    echo "Valor do desconto = R$". $desconto ."<br>";
    echo "Valor final = R$". $valor_final . "<br>";
?>