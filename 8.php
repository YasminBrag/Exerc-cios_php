<?php
echo "Digite uma distância em metros: ";
$metros = floatval(trim(fgets(STDIN)));
$kilometros = $metros / 1000;
$hectometros = $metros / 100;
$decametros = $metros / 10;
$decímetros = $metros * 10;
$centímetros = $metros * 100;
$milímetros = $metros * 1000;

echo "A distância de $metros m corresponde a:\n";
echo "$kilometros Km\n";
echo "$hectometros Hm\n";
echo "$decametros Dam\n";
echo "$decímetros dm\n";
echo "$centímetros cm\n";
echo "$milímetros mm\n";
?>