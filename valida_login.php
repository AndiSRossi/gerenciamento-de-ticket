<?php
require_once("funcoes_valida_login.php");

session_start();

$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? '';

if (valida_login($login, $senha)) {
    $_SESSION['usuario'] = $login;
    header("Location: pages/conteudo/inicio_conteudo.php");
    exit();
} else {
    header("Location: index.php?erro=1");
    exit();
}
?>
