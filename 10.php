<?php
echo "Digite a largura da parede (em metros): ";
$largura = floatval(trim(fgets(STDIN)));
echo "Digite a altura da parede (em metros): ";
$altura = floatval(trim(fgets(STDIN)));
$area = $largura * $altura;
$litrosTinta = $area / 2;
echo "A área a ser pintada é $area m² e a quantidade de tinta necessária é $litrosTinta litros.";
?>
