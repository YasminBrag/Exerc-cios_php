<?php
echo "Digite um número: ";
$numero = intval(trim(fgets(STDIN)));
$antecessor = $numero - 1;
$sucessor = $numero + 1;
echo "O antecessor de $numero é $antecessor\n";
echo "O sucessor de $numero é $sucessor";
?>