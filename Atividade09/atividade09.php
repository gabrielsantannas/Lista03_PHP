<?php

$salario = $_POST ['salario'];
$novosalario;

if ($salario <= 1500) {
    $novosalario = $salario + ($salario * 20 /100);
} elseif ($salario <= 3000) {
    $novosalario = $salario + ($salario * 15 /100);
} else {
    $novosalario = $salario + ($salario * 10 /100);
}

echo "O seu novo salário é: R$" . number_format($novosalario, 2, ',','.'); 
?>