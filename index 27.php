<?php
// Exercício 27 - Fatorial

$num = 5; // altere para testar
$fatorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $fatorial *= $i;
}

echo "Fatorial de $num: $fatorial\n";
?>