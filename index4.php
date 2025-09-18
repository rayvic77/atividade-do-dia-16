<?php
cho "<h2>4. Classe Produto com Desconto</h2>";
class Produto {
    public $nome;
    public $preco;

    public function aplicarDesconto($percentual) {
        return $this->preco - ($this->preco * $percentual / 100);
    }
}
$p = new Produto();
$p->nome = "Notebook";
$p->preco = 3000;
echo "Preço com desconto: R$" . $p->aplicarDesconto(10);

?>