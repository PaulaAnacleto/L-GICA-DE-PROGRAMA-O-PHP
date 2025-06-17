<?php
//IRMÃO DO CONSOLE.LOG()
echo "<h1>Hello World!<h1>";
echo "<hr>";

//CRIAÇÃO DE VARIÁVEIS
$nome = "Ana";
$idade = 23;

echo $nome ;

if ($nome === 'Ana' and $idade === 23){
    echo 'Seja Bem vindo(a)' . $nome;
}

//FUNÇÃO 
function saudacao($nome){
    return "Olá, " . $nome;
}

echo saudacao($nome) . "<br>";

//DEBUGANDO VARIÁVEIS
var_dump($nome, $idade);

//1° FORMA DE CRIAR ARRAY 
$arr = array(1, 2, 3, 4, 5);

//2° FORMA DE CRIAR ARRAY
$arr2 = [1, 2, 3, 4, 5];

//3° FORMA DE CRIAR ARRAY
echo $arr[0] . " " . $arr2[1] . "<br>";

foreach ($arr2 as $number) {
    echo $number . "<br>";
}

$alunos = [
    'classificacao' => "os melhores <3 do SENAI",
    'observacao' => "falantes"
];

    foreach ($alunos as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

?>