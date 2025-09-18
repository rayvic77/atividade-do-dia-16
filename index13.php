<?php
echo "<h2>13. Classe Funcionario/Gerente/Estagiario</h2>";
class Funcionario2 {
    public $salario;
    public function __construct($salario) { $this->salario = $salario; }
}
class Gerente extends Funcionario2 {
    public function calcularBonus() { return $this->salario * 0.5; }
}
class Estagiario extends Funcionario2 {
    public function calcularBonus() { return $this->salario * 0.1; }
}
$g = new Gerente(5000);
$e = new Estagiario(1500);
echo "Bônus Gerente: ".$g->calcularBonus()." - Bônus Estagiário: ".$e->calcularBonus();

?>