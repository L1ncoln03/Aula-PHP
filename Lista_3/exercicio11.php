<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Perímetro do Círculo</title>
    <style>
        body { background-color: #fce4ec; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #d81b60; border-radius: 8px; }
        h1 { text-align: center; color: #c2185b; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #c2185b; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular o Perímetro do Círculo</h1>
        <form method="post">
            <input type="number" step="0.01" name="raio" placeholder="Raio" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $raio = $_POST['raio'];
                $perimetro = 2 * pi() * $raio;
                echo "<p>O perímetro do círculo é: " . number_format($perimetro, 2) . " m</p>";
            }
        ?>
    </div>
</body>
</html>
