<?php
// Exercício 47 - Soma dos elementos de um array

function somaArray($arr) {
    return array_sum($arr);
}

$numeros = [1, 2, 3, 4, 5];
echo "Soma dos elementos: " . somaArray($numeros) . "\n";
?>