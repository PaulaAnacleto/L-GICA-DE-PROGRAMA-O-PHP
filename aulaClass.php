<?php
require "Carros.php";
require "Animais.php";
require "DesafiosPoo/cadastroAluno.php";

//OBJETO (INSTÂNCIA DE UMA CLASSE)
$carro = new Carros();
$carro2 = new Carros();

//USO DA HERANÇA
$carroEletrico = new CarroEletrico();

$alunos = new alunos();

$alunos->nome = "João";
$alunos->idade = 17;
$alunos->matricula = "17123456";
$alunos->nota1 = 8;
$alunos->nota2 = 9;  
$alunos->peso1 = 2;
$alunos->peso2 = 4;

echo "Nome: " . $alunos->nome . "<br>" . "Idade: " . $alunos->idade . "<br>" . "Matrícula: " . $alunos->matricula . "<br>" . "Nota1: " . $alunos->nota1 . "<br>" . "Nota2: " . $alunos->nota2 . "<br>" . "Peso1: " . $alunos->peso1 . "<br>" . "Peso2: " . $alunos->peso2 . "<br>";
echo "Média: " . number_format($alunos->calcularMedia($alunos), 2) . "<br>";
echo "Verificação de aprovação: " . $alunos->verificarAprovado($alunos) . "<br>";

echo "<hr>";


//POLIMORFISMO
$gato = new Gato();
echo emitirSom($gato) . "<br>";

echo "<hr>";
//ATRIBUTOS ESPECÍFICOS DO CARRO ELÉTRICO
$carroEletrico->cor = "Azul";
$carroEletrico->marca = "BYD";
$carroEletrico->modelo = "Seal";
$carroEletrico->autonomia = "372km";

//ATRIBUTOS ESPECÍFICOS DE CADA OBJETO
$carro->cor = "Preto";
$carro->marca = "Fiat";
$carro->modelo = "Uno";

//NOVOS ATRIBUTOS ESPECÍFICOS DE CADA NOVO OBJETO
$carro2->cor = "Branco";
$carro2->marca = "Chevrolet";
$carro2->modelo = "Onix";

echo "Cor: " . $carro->cor ."<br>". "Marca: " . $carro->marca ."<br>". " Modelo: " . $carro->modelo . "<br>"; echo "<hr>";
echo "Cor: ". $carro2->cor ."<br>". "Marca: " . $carro2->marca ."<br>". "Modelo: ". $carro2->modelo ."<br>";echo "<hr>";
echo "Cor: " . $carroEletrico->cor ."<br>". "Marca: " . $carroEletrico->marca ."<br>". "Modelo: " . $carroEletrico->modelo ."<br>". "Autonomia: " . $carroEletrico->autonomia;
?>