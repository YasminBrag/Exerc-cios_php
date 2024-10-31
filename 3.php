<?php
echo "Nome do Funcionário: ";
$nome = trim(fgets(STDIN));
echo "Salário: ";
$salario = trim(fgets(STDIN));
echo "O funcionário $nome tem um salário de R$$salario em Junho.";
?>