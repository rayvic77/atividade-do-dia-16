<?php
echo "<h2>19. Classe Loja</h2>";
class Loja {
    public $produtos = [];
    public function adicionarProduto($produto) { $this->produtos[] = $produto; }
    public function listarProdutos() {
        foreach($this->produtos as $p) { echo $p->nome . " - R$" . $p->preco . "<br>"; }
    }
}
$loja = new Loja();
$loja->adicionarProduto($p);
$loja->listarProdutos();
?>