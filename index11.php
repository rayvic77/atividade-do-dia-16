<?php
echo "<h2>11. Classe Animal</h2>";
class Animal { public function falar() { return "Som genérico"; } }
class Cachorro extends Animal { public function falar() { return "Au Au"; } }
class Gato extends Animal { public function falar() { return "Miau"; } }
$dog = new Cachorro();
$cat = new Gato();
echo $dog->falar() . " - " . $cat->falar();

?>