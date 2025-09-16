<?php
// Exercício 16 - Exibir o dia da semana a partir de um número

$numero = 4; // altere o valor entre 1 e 7 para testar

switch ($numero) {
    case 1:
        $dia = "Domingo";
        break;
    case 2:
        $dia = "Segunda-feira";
        break;
    case 3:
        $dia = "Terça-feira";
        break;
    case 4:
        $dia = "Quarta-feira";
        break;
    case 5:
        $dia = "Quinta-feira";
        break;
    case 6:
        $dia = "Sexta-feira";
        break;
    case 7:
        $dia = "Sábado";
        break;
    default:
        $dia = "Número inválido! Informe um número entre 1 e 7.";
}

echo "Número informado: $numero\n";
echo "Dia da semana: $dia\n";
