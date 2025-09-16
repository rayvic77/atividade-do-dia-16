<?php
// Exercício 46 - Contar vogais em uma string

function contarVogais($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $texto = strtolower($texto);
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $contador++;
        }
    }

    return $contador;
}

$exemplo = "Olá Mundo!";
echo "Número de vogais em '$exemplo': " . contarVogais($exemplo) . "\n";
?>