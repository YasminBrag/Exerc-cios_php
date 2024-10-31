<?php
echo "Nota 1: ";
$nota1 = floatval(trim(fgets(STDIN)));
echo "Nota 2: ";
$nota2 = floatval(trim(fgets(STDIN)));
$media = ($nota1 + $nota2) / 2;
echo "A média entre $nota1 e $nota2 é igual a $media.";
?>