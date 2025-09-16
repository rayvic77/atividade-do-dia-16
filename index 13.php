<?php
// Exercício 13 - Determinar o maior de três números

$num1 = 10;
$num2 = 25;
$num3 = 15;

echo "Números informados: $num1, $num2, $num3\n";

if ($num1 >= $num2 && $num1 >= $num3) {
    $maior = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $maior = $num2;
} else {
    $maior = $num3;
}

echo "O maior número é: $maior\n";
?>