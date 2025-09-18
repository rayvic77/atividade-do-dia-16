<?php
echo "<h2>12. Classe Veiculo</h2>";
class Veiculo { public $velocidadeMaxima; }
class Carro2 extends Veiculo {}
class Moto extends Veiculo {}
$v = new Carro2();
$v->velocidadeMaxima = 180;
echo "Velocidade Máxima: $v->velocidadeMaxima km/h";
?>