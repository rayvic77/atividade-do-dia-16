<?php
// Exercício 41 - Função par ou ímpar

function parOuImpar($num) {
    return ($num % 2 == 0) ? "Par" : "Ímpar";
}

echo parOuImpar(7) . "\n";
echo parOuImpar(10) . "\n";
?>