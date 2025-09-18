<?php
echo "<h2>5. Classe ContaBancaria</h2>";
class ContaBancaria {
    public $saldo = 0;

    public function depositar($valor) { $this->saldo += $valor; }
    public function sacar($valor) { $this->saldo -= $valor; }
}
$conta = new ContaBancaria();
$conta->depositar(1000);
$conta->sacar(250);
echo "Saldo atual: R$" . $conta->saldo;
?>