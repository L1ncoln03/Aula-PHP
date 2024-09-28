<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Área do Retângulo</title>
    <style>
        body { background-color: #e8f5e9; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #4caf50; border-radius: 8px; }
        h1 { text-align: center; color: #388e3c; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #388e3c; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular a Área do Retângulo</h1>
        <form method="post">
            <input type="number" step="0.01" name="largura" placeholder="Largura" required>
            <input type="number" step="0.01" name="altura" placeholder="Altura" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $largura = $_POST['largura'];
                $altura = $_POST['altura'];
                $area = $largura * $altura;
                echo "<p>A área do retângulo é: " . number_format($area, 2) . " m²</p>";
            }
        ?>
    </div>
</body>
</html>
