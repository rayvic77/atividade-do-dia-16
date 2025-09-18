<?php
echo "<h2>10. Classe Retangulo</h2>";
class Retangulo {
    public $base;
    public $altura;
    public function area() { return $this->base * $this->altura; }
    public function perimetro() { return 2 * ($this->base + $this->altura); }
}
$r = new Retangulo();
$r->base = 5;
$r->altura = 3;
echo "Área: " . $r->area() . ", Perímetro: " . $r->perimetro();
?>