<?php

$nota = $_POST ['nota'];

if ($nota >= 9 && $nota == 10) {
    echo "Conceito A";
} elseif ($nota >= 7 && $nota < 9 ) {
    echo "Conceito B";
} elseif ($nota >= 5 && $nota < 7 ) {
    echo "Conceito C";
} elseif ($nota >= 3 && $nota < 5 ) {
    echo "Conceito D";
} elseif ($nota >= 0 && $nota < 3 ) {
    echo "Conceito E";
} else {
    echo "Nota inválida";
}
?>