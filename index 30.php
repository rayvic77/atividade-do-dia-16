<?php
// Exercício 30 - Divisores de um número

$num = 28; // altere para testar
$divisores = [];

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $divisores[] = $i;
    }
}

echo "Divisores de $num: ";
print_r($divisores);
?>