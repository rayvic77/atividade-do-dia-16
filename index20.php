<?php
echo "<h2>20. Classe Biblioteca</h2>";
class Biblioteca {
    public $livros = [];
    public function adicionarLivro($livro) { $this->livros[] = $livro; }
    public function listarLivros() {
        foreach($this->livros as $livro) { echo $livro->exibir() . "<br>"; }
    }
}
$biblio = new Biblioteca();
$biblio->adicionarLivro($l);
$biblio->listarLivros();
?>