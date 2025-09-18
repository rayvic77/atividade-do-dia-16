<?php
echo "<h2>16. Classe Pagamento</h2>";
class Pagamento { public function processar() { return "Processando pagamento..."; } }
class CartaoCredito extends Pagamento { public function processar() { return "Pagamento com Cartão"; } }
class Boleto extends Pagamento { public function processar() { return "Pagamento com Boleto"; } }
echo (new CartaoCredito())->processar();
?>
