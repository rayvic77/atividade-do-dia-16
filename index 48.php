<?php
// Exercício 48 - Matriz 3x3 preenchida de 1 a 9

$matriz = [];
$contador = 1;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriz[$i][$j] = $contador++;
    }
}

echo "Matriz 3x3:\n";
print_r($matriz);
?>