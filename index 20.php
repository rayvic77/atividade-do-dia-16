<?php
// Exercício 20 - Validar senha

$senhaPreDefinida = "senha123";
$senhaDigitada = "senha123"; // altere para testar

echo "Senha digitada: $senhaDigitada\n";

if ($senhaDigitada === $senhaPreDefinida) {
    echo "Senha correta!\n";
} else {
    echo "Senha incorreta!\n";
}
?>