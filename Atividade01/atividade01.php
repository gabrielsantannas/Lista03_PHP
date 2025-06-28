<?php

$num = $_POST ['num'];

if ($num > 0) {
    echo "O número é positivo";
} elseif ($num == 0) {
    echo "O número é neutro";
} else {
    echo "O número é negativo";
}
?>