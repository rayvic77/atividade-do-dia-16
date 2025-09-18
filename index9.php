<?php
echo "<h2>9. Classe Calculadora</h2>";
class Calculadora {
    public function somar($a, $b) { return $a + $b; }
    public function subtrair($a, $b) { return $a - $b; }
    public function multiplicar($a, $b) { return $a * $b; }
    public function dividir($a, $b) { return $b != 0 ? $a / $b : "Erro"; }
}
$calc = new Calculadora();
echo "5 + 3 = " . $calc->somar(5,3);

/* ------------------- 10 ------------------- */
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