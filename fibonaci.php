<?php

function verificarFibona($num)
{
    $fibona1 = 0;
    $fibona2 = 1;

    if ($num == $fibona1 || $num == $fibona2) {
        return true;
    }
    $proximo = $fibona1 + $fibona2;
    while ($proximo <= $num) {
              if ($proximo == $num) {
            return true;
        }
   
        $fibona1 = $fibona2;
        $fibona2 = $proximo;
        $proximo = $fibona1 + $fibona2;
    }
    return false;
}

function exibirMsg($num, $sequenciaOK)
{
    if ($sequenciaOK) {
        echo "$num pertence à sequência de Fibonacci.\n";
    } else {
        echo "$num não pertence à sequência de Fibonacci.\n";
    }
}

if (isset($_POST['numero'])) {
    $num = intval($_POST['numero']);
    $sequenciaOK = verificarFibona($num);
    exibirMsg($num, $sequenciaOK);
}
?>
