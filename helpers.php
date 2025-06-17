<?php

/**
 * Função de validação de e-mail
 * @param string $email Endereço de e-mail a ser validado
 * @return bool Retorna true se o e-mail for válido, caso contrário, false
 * @author Paula Anacleto <paulaanacleto15@gmal.com>
 */

 function validarEnderecoEmail($email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
 }

 $diasDaSemana = 2;
 switch ($diasDaSemana) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "O número informado não corresponde a um dia da semana válido.";
    }

    $resultado = match($diasDaSemana) {
        1 => "Domingo",
        2 => "Segunda-feira",
        3 => "Terça-feira",
        4 => "Quarta-feira",
        5 => "Quinta-feira",
        6 => "Sexta-feira",
        7 => "Sábado",
        default => "O número informado não corresponde a um dia da semana válido.",
    };

    echo "<br>";
    var_dump($resultado)
?>