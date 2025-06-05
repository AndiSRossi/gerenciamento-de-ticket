<?php 

function valida_login($login, $senha) {
    $login_bd = 'admin';
    $senha_bd = 'admin';

    if ($login === $login_bd && $senha === $senha_bd) {
        return true;
    }

    return false;
}
?>
