
<?php

$num1 = $_POST ['num1'];
$num2 = $_POST ['num2'];
$Operação = $_POST ['Operação'];
$resultado;

switch ($Operação) {
    case '+':
        $resultado = $num1 + $num2;
        break;

    case '-':
        $resultado = $num1 - $num2;
        break;
    
    case '*':
    $resultado = $num1 * $num2;
        break;

    case '/':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            echo "Não se pode dividir por 0";
            exit;
        }
        break;
    default:
        echo "Operação Inválida";
        break;
}

echo "O resultado é: " . number_format($resultado, 2, ',', '.');
?>
