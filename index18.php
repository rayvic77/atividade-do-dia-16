<?php
echo "<h2>18. Polimorfismo com Animais</h2>";
$animais = [new Cachorro(), new Gato()];
foreach ($animais as $animal) {
    echo $animal->falar() . " | ";
}
?>