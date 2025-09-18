<?php
echo "<h2>15. Classe Ingresso</h2>";
class Ingresso { public $preco = 50; }
class IngressoVIP extends Ingresso {
    public function exibirPreco() { return "Ingresso VIP: R$" . ($this->preco + 30); }
}
class IngressoNormal extends Ingresso {
    public function exibirPreco() { return "Ingresso Normal: R$" . $this->preco; }
}
$vip = new IngressoVIP();
$normal = new IngressoNormal();
echo $vip->exibirPreco() . " | " . $normal->exibirPreco();

?>