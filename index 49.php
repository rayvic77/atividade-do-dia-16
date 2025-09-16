<?php
// Exercício 49 - Soma dos elementos da matriz 3x3

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$soma = 0;
foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        $soma += $valor;
    }
}

echo "Soma dos elementos da matriz: $soma\n";
?>