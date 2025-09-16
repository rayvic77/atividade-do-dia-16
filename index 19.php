<?php
// Exercício 19 - Verificar se uma letra é vogal ou consoante

$letra = 'E'; // altere para testar outras letras

echo "Letra informada: $letra\n";

$letraMinuscula = strtolower($letra);

if (in_array($letraMinuscula, ['a', 'e', 'i', 'o', 'u'])) {
    echo "A letra '$letra' é uma vogal.\n";
} elseif (ctype_alpha($letraMinuscula)) {
    echo "A letra '$letra' é uma consoante.\n";
} else {
    echo "Não é uma letra válida.\n";
}
?>