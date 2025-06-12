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

?>