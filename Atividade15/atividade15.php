<?php

$vrvenda = $_POST ['vrvenda'];
$comissao;

if ($vrvenda <= 1000) {
    $comissao =  ($vrvenda * 5 /100);
} elseif ($vrvenda <= 5000) {
    $comissao = ($vrvenda * 10 /100);
} else {
    $comissao = ($vrvenda * 15 /100);
}

echo "O valor da sua comissão é: R$" . number_format($comissao, 2, ',','.'); 
?>