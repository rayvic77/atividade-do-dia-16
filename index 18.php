<?php
// Exercício 18 - Calculadora simples usando switch

$num1 = 10;
$num2 = 5;
$operacao = '+'; // altere para '+', '-', '*', '/' ou '%'

echo "Número 1: $num1\n";
echo "Número 2: $num2\n";
echo "Operação: $operacao\n";

switch ($operacao) {
    case '+':
        $resultado = $num1 + $num2;
        echo "Resultado: $resultado\n";
        break;
    case '-':
        $resultado = $num1 - $num2;
        echo "Resultado: $resultado\n";
        break;
    case '*':
        $resultado = $num1 * $num2;
        echo "Resultado: $resultado\n";
        break;
    case '/':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            echo "Resultado: $resultado\n";
        } else {
            echo "Erro: Divisão por zero não é permitida.\n";
        }
        break;
    case '%':
        if ($num2 != 0) {
            $resultado = $num1 % $num2;
            echo "Resultado: $resultado\n";
        } else {
            echo "Erro: Módulo por zero não é permitido.\n";
        }
        break;
    default:
        echo "Operação inválida.\n";
}
?>