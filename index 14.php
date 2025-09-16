<?php
// Exercício 14 - Verificar se um número é positivo, negativo ou zero

$numero = 0; // altere esse valor para testar outros números

echo "Número informado: $numero\n";

if ($numero > 0) {
    echo "O número é positivo.\n";
} elseif ($numero < 0) {
    echo "O número é negativo.\n";
} else {
    echo "O número é zero.\n";
}
?>