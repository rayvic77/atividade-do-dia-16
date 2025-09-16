<?php
// Exercício 29 - Contar pares entre 1 e 100

$contador = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $contador++;
    }
}

echo "Quantidade de números pares entre 1 e 100: $contador\n";
?>