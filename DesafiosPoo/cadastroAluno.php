<?php
class Alunos{
    public $nome;    
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;

    public function calcularMedia($aluno) {
        $media = ($aluno->nota1 * $aluno->peso1 + $aluno->nota2 * $aluno->peso2) / ($aluno->peso1 + $aluno->peso2);
        return $media;
    }

    public function exibirDados($aluno) {
        echo "Nome: " . $aluno->nome . "<br>";
        echo "Idade: " . $aluno->idade . "<br>";
        echo "Matrícula: " . $aluno->matricula . "<br>";
        echo "Nota 1: " . $aluno->nota1 . "<br>";
        echo "Nota 2: " . $aluno->nota2 . "<br>";
        echo "Peso 1: " . $aluno->peso1 . "<br>";
        echo "Peso 2: " . $aluno->peso2 . "<br>";
    }

    public function verificarAprovado($aluno) {
        if ($aluno->calcularMedia($aluno) >= 7) {
            return "Aluno aprovado!";
        } else {
            return "Aluno reprovado!";
        }
    }
}

?>