<?php

$num = $_POST['num'];
$ddd = substr($num, 0, 2);

switch ($ddd) {
    case '11':
        echo "DDD 11 - São Paulo (capital)";
        break;
    case '21':
        echo "DDD 21 - Rio de Janeiro (capital)";
        break;
    case '27':
        echo "DDD 27 - Espírito Santo (região metropolitana de Vitória)";
        break;
    default:
        echo "DDD $ddd - DDD não reconhecido ou inválido.";
        break;
}
?>
