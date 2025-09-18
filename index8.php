<?php
echo "<h2>8. Classe Usuario</h2>";
class Usuario {
    private $senha = "1234";

    public function validarSenha($senhaDigitada) {
        return $senhaDigitada === $this->senha ? "Senha correta" : "Senha incorreta";
    }
}
$u = new Usuario();
echo $u->validarSenha("1234");
?>