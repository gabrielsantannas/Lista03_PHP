<?php

$ava = $_POST ['ava'];

if ($ava == 5) { echo "Excelente"; 
} elseif ($ava == 4) {
    echo "Muito bom";
} elseif ($ava == 3) {
    echo "Regular";
} elseif ($ava == 2) {
    echo "Ruim";
} elseif ($ava == 1) {
    echo "Muito ruim";
} else {
    echo "Nota inválida";
}

?>