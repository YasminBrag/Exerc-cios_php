<?php
echo "Quanto dinheiro você tem na carteira (em R$)? ";
$dinheiro = floatval(trim(fgets(STDIN)));
$cotacao = 3.45;
$dolares = $dinheiro / $cotacao;
echo "Você pode comprar US$$dolares.";
?>