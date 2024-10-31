<?php
echo "Digite um valor: ";
$valor1 = intval(trim(fgets(STDIN)));
echo "Digite outro valor: ";
$valor2 = intval(trim(fgets(STDIN)));
$soma = $valor1 + $valor2;
echo "A soma entre $valor1 e $valor2 é igual a $soma.";
?>