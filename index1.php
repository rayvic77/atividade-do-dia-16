<?php
echo "<h1>Atividade de POO em PHP</h1>";

/* ------------------- 1 ------------------- */
echo "<h2>1. Classe Pessoa</h2>";
class Pessoa {
    public $nome;
    public $idade;
}
$p1 = new Pessoa();
$p1->nome = "Maria";
$p1->idade = 25;
echo "Nome: $p1->nome, Idade: $p1->idade";
?>