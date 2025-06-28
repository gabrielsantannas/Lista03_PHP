<?php

$ano = $_POST ['ano'];

if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "O ano informado é bissexto";
} else {
    echo "O ano informado não é bissexto";
}
?>
