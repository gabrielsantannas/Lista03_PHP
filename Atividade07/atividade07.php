<?php

$idade = $_POST ['idade'];

if ($idade >= 0 && $idade <= 12) {
    echo "Pela sua idade, você é classificado como: criança";
} elseif ($idade >= 13 && $idade <= 17) {
    echo "Pela sua idade, você é classificado como: adolescente";
} elseif ($idade >= 18 && $idade <= 59) {
    echo "Pela sua idade, você é classificado como: adulto";
} elseif ($idade >= 60) {
    echo "Pela sua idade, você é classificado como: idoso";
} else {
    echo "Idade inválida";
}
?>