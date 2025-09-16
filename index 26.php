<?php
// Exercício 25 - Soma dos números pares até 100

$soma = 0;
for ($i = 2; $i <= 100; $i += 2) {
    $soma += $i;
}
echo "Soma dos números pares até 100: $soma\n";
?>