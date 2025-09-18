<?php
echo "<h2>17. Classe Mensagem</h2>";
class Mensagem { public function enviar() { return "Enviando mensagem..."; } }
class Email extends Mensagem { public function enviar() { return "Enviando Email"; } }
class SMS extends Mensagem { public function enviar() { return "Enviando SMS"; } }
echo (new Email())->enviar() . " - " . (new SMS())->enviar();
?>
