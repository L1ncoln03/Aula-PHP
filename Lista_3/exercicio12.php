<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 - Potência</title>
    <style>
        body { background-color: #e1bee7; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #9c27b0; border-radius: 8px; }
        h1 { text-align: center; color: #8e24aa; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #8e24aa; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular Potência</h1>
        <form method="post">
            <input type="number" step="0.01" name="base" placeholder="Base" required>
            <input type="number" name="expoente" placeholder="Expoente" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $base = $_POST['base'];
                $expoente = $_POST['expoente'];
                $potencia = pow($base, $expoente);
                echo "<p>O resultado de $base elevado a $expoente é: " . number_format($potencia, 2) . "</p>";
            }
        ?>
    </div>
</body>
</html>
