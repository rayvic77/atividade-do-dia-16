<?php
// Exercício 28 - Fibonacci

$n = 10; // quantidade de termos
$fibo = [0, 1];

for ($i = 2; $i < $n; $i++) {
    $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
}

echo "Sequência de Fibonacci até $n termos:\n";
print_r($fibo);
?>