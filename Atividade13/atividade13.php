
<?php

$idade = $_POST ['idade'];

if ($idade < 18) {
    echo "Acesso Negado";
}else {
    echo "Acesso Permitido";
}
?>
