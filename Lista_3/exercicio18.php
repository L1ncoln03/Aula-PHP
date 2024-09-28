<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18 - Juros Compostos</title>
    <style>
        body { background-color: #f1f8e4; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #aeea00; border-radius: 8px; }
        h1 { text-align: center; color: #9e9d24; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #9e9d24; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular Montante com Juros Compostos</h1>
        <form method="post">
            <input type="number" step="0.01" name="capital" placeholder="Capital (R$)" required>
            <input type="number" step="0.01" name="taxa" placeholder="Taxa de Juros (%)" required>
            <input type="number" name="periodo" placeholder="Período (anos)" required>
            <button type="submit">Calcular Montante</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $capital = $_POST['capital'];
                $taxa = $_POST['taxa'] / 100;
                $periodo = $_POST['periodo'];
                $montante = $capital * pow((1 + $taxa), $periodo);
                echo "<p>O montante com juros compostos é: R$ " . number_format($montante, 2) . "</p>";
            }
        ?>
    </div>
</body>
</html>
