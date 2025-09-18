<?php
echo "<h2>6. Classe Livro</h2>";
class Livro {
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    public function exibir() {
        return "Livro: $this->titulo, Autor: $this->autor";
    }
}
$l = new Livro("1984", "George Orwell");
echo $l->exibir();
?>