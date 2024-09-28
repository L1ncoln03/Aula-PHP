<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15 - Calcular IMC</title>
    <style>
        body { background-color: #ffccbc; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #ff5722; border-radius: 8px; }
        h1 { text-align: center; color: #d32f2f; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #d32f2f; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular IMC</h1>
        <form method="post">
            <input type="number" step="0.01" name="peso" placeholder="Peso (kg)" required>
            <input type="number" step="0.01" name="altura" placeholder="Altura (m)" required>
            <button type="submit">Calcular IMC</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                $imc = $peso / pow($altura, 2);
                echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
            }
        ?>
    </div>
</body>
</html>
