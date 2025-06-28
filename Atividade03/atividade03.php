<?php

$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "Sua média é igual a: " . number_format($media, 1, ',',);;

if ($media >= 7) {
    echo "<br>Você está aprovado";
} elseif ($media >= 5 && $media < 7) {
    echo "<br>Você está de recuperação";
} else {
    echo "<br>Você está reprovado";
}
?>