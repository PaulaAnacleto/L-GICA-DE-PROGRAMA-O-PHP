<?php
$num1 = 10;
$num2 = 5;


echo "Adição: $num1 + $num2 = " . ($num1 + $num2) . "<br>";
echo "Subtração: $num1 - $num2 = " . ($num1 - $num2) . "<br>";
echo "Multiplicação: $num1 * $num2 = " . ($num1 * $num2) . "<br>";

if ($num2 != 0) {
    echo "Divisão: $num1 / $num2 = " . ($num1 / $num2) . "<br>";
} else {
    echo "Divisão: Erro - divisão por zero não é permitida.<br>";
}
?>