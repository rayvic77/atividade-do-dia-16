<?php
echo "<h2>7. Classe Funcionario</h2>";
class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function aumentarSalario($percentual) {
        $this->salario += $this->salario * $percentual / 100;
    }
    public function exibir() {
        return "$this->nome - Salário: R$$this->salario";
    }
}
$f = new Funcionario("Carlos", 2000);
$f->aumentarSalario(10);
echo $f->exibir();
?>