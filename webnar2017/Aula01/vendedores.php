<?php 
include_once 'Salario.php';

$sal = new Salario();

$salario = $_POST['salario'];
$vendas = $_POST['vendas'];

echo "O salário atual é de R$ ". str_replace(".",",", number_format($sal->calcSalario($salario, $vendas), 2));