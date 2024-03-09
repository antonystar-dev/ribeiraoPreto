<?php

function invertendoString($palavra) {
    $stringInvertida = '';
       for ($i = strlen($palavra) - 1; $i >= 0; $i--) {
         $stringInvertida .= $palavra[$i];
    }
    return $stringInvertida;
}

    $minhaString =$_POST['palavra'];
//$minhaString = "Vaga de estagio";
$minhaStringInvertida = invertendoString($minhaString);
echo "original: $minhaString\n";
echo "invertida: $minhaStringInvertida\n";

?>
