<?php
    $arr = [
    "pão" => "R$5,00",
    "café" => "R$10,00",
    "carne" => "R$12,00"
];
foreach ($arr as $key => $value) {
        echo "Produto: " . $key . ", " . "Preço" . $value . "<br>";
    }
?>