<?php
echo "Digite um número: ";
$numero = floatval(trim(fgets(STDIN)));
$dobro = $numero * 2;
$tercaParte = $numero / 3;
echo "O dobro de $numero é $dobro\n";
echo "A terça parte de $numero é $tercaParte";
?>