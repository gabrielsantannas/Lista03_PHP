<?php

$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];

$usuariofixo = "admin";
$senhafixa = "123";

if ($usuario === $usuariofixo && $senha === $senhafixa) {
    echo "Acesso Permitido!";
} else {
    echo "Acesso Negado! <br>Usuário ou senha incorretos.";
}
?>