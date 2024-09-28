<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Celsius para Fahrenheit</title>
    <style>
        body { background-color: #ffecb3; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #ffca28; border-radius: 8px; }
        h1 { text-align: center; color: #ffa000; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #ffa000; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Converter Celsius para Fahrenheit</h1>
        <form method="post">
            <input type="number" step="0.01" name="celsius" placeholder="Temperatura em Celsius" required>
            <button type="submit">Converter</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $celsius = $_POST['celsius'];
                $fahrenheit = ($celsius * 9/5) + 32;
                echo "<p>A temperatura em Fahrenheit é: " . number_format($fahrenheit, 2) . "°F</p>";
            }
        ?>
    </div>
</body>
</html>
