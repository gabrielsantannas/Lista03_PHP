<?php

$senha = $_POST ['senha'];
$senhafixa = "51700";

if ($senha == $senhafixa) {
    echo "Senha correta";
} else {
    echo "Senha incorreta";
}
?>