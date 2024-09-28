<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14 - Quilômetros para Milhas</title>
    <style>
        body { background-color: #e3f2fd; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #2196f3; border-radius: 8px; }
        h1 { text-align: center; color: #1976d2; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #1976d2; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Converter Quilômetros para Milhas</h1>
        <form method="post">
            <input type="number" step="0.01" name="quilos" placeholder="Valor em quilômetros" required>
            <button type="submit">Converter</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $quilos = $_POST['quilos'];
                $milhas = $quilos * 0.621371;
                echo "<p>$quilos quilômetros é igual a " . number_format($milhas, 2) . " milhas</p>";
            }
        ?>
    </div>
</body>
</html>
