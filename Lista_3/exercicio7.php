<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Fahrenheit para Celsius</title>
    <style>
        body { background-color: #ffebee; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #f44336; border-radius: 8px; }
        h1 { text-align: center; color: #e53935; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #e53935; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Converter Fahrenheit para Celsius</h1>
        <form method="post">
            <input type="number" step="0.01" name="fahrenheit" placeholder="Temperatura em Fahrenheit" required>
            <button type="submit">Converter</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $fahrenheit = $_POST['fahrenheit'];
                $celsius = ($fahrenheit - 32) * 5/9;
                echo "<p>A temperatura em Celsius é: " . number_format($celsius, 2) . "°C</p>";
            }
        ?>
    </div>
</body>
</html>
