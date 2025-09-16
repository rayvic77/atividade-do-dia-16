<?php
// Exercício 36 - Contar pares no array

$numeros = [5, 10, 2, 8, 20];
$pares = 0;

foreach ($numeros as $num) {
    if ($num % 2 == 0) {
        $pares++;
    }
}

echo "Quantidade de números pares no array: $pares\n";
?>