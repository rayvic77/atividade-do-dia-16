<?php
// Exercício 15 - Calcular a média de duas notas e verificar aprovação

$nota1 = 8.5;
$nota2 = 6.5;

$media = ($nota1 + $nota2) / 2;

echo "Nota 1: $nota1\n";
echo "Nota 2: $nota2\n";
echo "Média: $media\n";

if ($media >= 7) {
    echo "Status: Aprovado\n";
} else {
    echo "Status: Reprovado\n";
}
?>