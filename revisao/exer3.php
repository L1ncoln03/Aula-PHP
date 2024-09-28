<?php require("cabecalho.php"); ?>
<h1>Atividade 03</h1>

<?php

echo "<h2>Distribuição de Bônus Anual</h2>";

$lucro = 9000; 
$funcionarios = [
    ['nome' => 'Lincoln', 'escalafao' => 5],
    ['nome' => 'Heitor', 'escalafao' => 3],
    ['nome' => 'Teste', 'escalafao' => 1],
    ['nome' => 'Lincoln2', 'escalafao' => 2],
    ['nome' => 'teste3', 'escalafao' => 4],
];

echo "<table class='table'>";
echo "<tr><th>Funcionário</th><th>Bônus</th></tr>";

foreach ($funcionarios as $funcionario) {
    
    if ($funcionario['escalafao'] == 1) $percentual = 0.1;
    elseif ($funcionario['escalafao'] == 2) $percentual = 0.2;
    elseif ($funcionario['escalafao'] == 3) $percentual = 0.3;
    elseif ($funcionario['escalafao'] == 4) $percentual = 0.5;
    elseif ($funcionario['escalafao'] == 5) $percentual = 0.7;


    $bonus = $lucro * $percentual;

    
    echo "<tr>";
    echo "<td>" . $funcionario['nome'] . "</td>";
    echo "<td>R$ " . number_format($bonus, 2, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";
require("rodape.php");
?>
