<?php
// Exercício 17 - Verificar se um ano é bissexto

$ano = 2024; // altere para testar outros anos

echo "Ano informado: $ano\n";

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "O ano $ano é bissexto.\n";
} else {
    echo "O ano $ano não é bissexto.\n";
}
