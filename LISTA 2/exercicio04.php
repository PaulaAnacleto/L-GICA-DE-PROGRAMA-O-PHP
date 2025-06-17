<?php
$arr = [
    "Paula" => 10,
    "Ana Luísa" => 8,
    "Matheus" => 6,
];

$soma = 0;

foreach ($arr as $key => $value) {
    echo "Aluno: " . $key . ", Nota: " . $value . "<br>";
    $soma += $value;
}

$media = $soma / 3;

echo "Média da turma: " . $media . "<br>";
?>