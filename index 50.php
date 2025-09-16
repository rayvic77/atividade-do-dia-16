<?php
// Exercício 50 - Soma da diagonal principal

function somaDiagonalPrincipal($matriz) {
    $soma = 0;
    for ($i = 0; $i < 3; $i++) {
        $soma += $matriz[$i][$i];
    }
    return $soma;
}

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "Soma da diagonal principal: " . somaDiagonalPrincipal($matriz) . "\n";
?>