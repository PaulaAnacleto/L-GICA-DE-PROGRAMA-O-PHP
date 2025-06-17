<?php

require 'helpers.php';
echo validarEnderecoEmail('paulaanacleto15@gmail.com');
echo validarEnderecoEmail('https://www.google.com');


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



$alunos = [
    "Paula" => [
        "nota" => 10,
    ],
    "João" => [
        "nota" => 8,
    ],
    "Maria" => [
        "nota" => 6,
    ]
];

$media = 0;
echo"<hr>";

foreach ($alunos as $alunoNome => $alunoNota) {
    echo "Nome: " . $alunoNome . "<br>";
    echo "Nota: " . $alunoNota['nota'] . "<br>";

    $media += $alunoNota['nota']/3;
}

echo "Média da turma: " . number_format($media, 2, '.') . "<br>";


/**
 * 
 * Função de saudação
 * @param string $nome Nome do usuário
 * @return string mensagem de saudação com o nome do usuário
 * @author Paula Anacleto <paulaanacleto15@gmail.com>
 * 
 */

//FUNÇÃO 
function saudacao($nome){
    return "Olá, " . $nome;
}

echo saudacao($nome) . "<br>";
?>