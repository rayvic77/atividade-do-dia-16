<?php
echo "<h2>2. Classe Carro</h2>";
class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function exibirInfo() {
        return "Carro: $this->marca $this->modelo, Ano: $this->ano";
    }
}
$c1 = new Carro();
$c1->marca = "Toyota";
$c1->modelo = "Corolla";
$c1->ano = 2022;
echo $c1->exibirInfo();
?>