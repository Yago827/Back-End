<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$cargo = $_POST['cargo'];
$nome = $_POST['nome'];
$salario = $_POST['salario'];
$cargos = ['Diretor','Gerente','Engenheiro'];
$nomecargo = $cargos[($cargo * 10)-1];

echo "Nome do funcionário: $nome<br>";
echo "Cargo: $nomecargo <br>";
echo "Salário Bruto: R$ $salario<br>";

$inss = 0.09 * $salario;    

$irrf = 0.075 * $salario;

$valeTransporte = 0.06 * $salario;

$salarioLiquido = $salario - ($inss + $irrf + $valeTransporte);

$salarioLiquidoBeneficio = $salarioLiquido + ($salario*$cargo);

echo "Tributos:<br>";
echo "- INSS: R$ $inss <br>";
echo "- IRRF: R$ $irrf <br>";        
echo "- Vale Transporte: R$ $valeTransporte <br>";

echo "Salário Líquido sem benefícios: R$ $salarioLiquido <br>";
echo "Salário Líquido com benefícios ($nomecargo) : R$ $salarioLiquidoBeneficio";

?>

</body>
</html>

