<?php
require_once("funcoes_valida_login.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$usuario_validado = valida_login($login, $senha);

if ($usuario_validado) {
    header("Location: pages/inicial.php");
    exit();
} else {
    header("Location: index.php?erro=1");
    exit();
}
?>
