<?php
echo "<h2>14. Classe Forma</h2>";
abstract class Forma { abstract public function calcularArea(); }
class Quadrado extends Forma {
    public $lado;
    public function calcularArea() { return $this->lado * $this->lado; }
}
class Circulo extends Forma {
    public $raio;
    public function calcularArea() { return 3.14 * $this->raio * $this->raio; }
}
$q = new Quadrado(); $q->lado = 4;
$c = new Circulo(); $c->raio = 3;
echo "Área Quadrado: ".$q->calcularArea()." - Área Círculo: ".$c->calcularArea();

?>