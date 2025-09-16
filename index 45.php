<?php
// Exercício 43 - Maior de três números

function maiorDeTres($a, $b, $c) {
    return max([$a, $b, $c]);
}

echo "Maior número: " . maiorDeTres(5, 9, 3) . "\n";
?>