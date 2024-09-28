<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Perímetro do Retângulo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c8e6c9;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 2px solid #4caf50;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #388e3c;
            text-align: center;
        }
        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular o Perímetro do Retângulo</h1>
        <form method="post">
            <input type="number" step="0.01" name="largura" placeholder="Digite a largura" required>
            <input type="number" step="0.01" name="altura" placeholder="Digite a altura" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $largura = $_POST['largura'];
                $altura = $_POST['altura'];
                $perimetro = 2 * ($largura + $altura);
                echo "<p>O perímetro do retângulo é: " . number_format($perimetro, 2) . " m</p>";
            }
        ?>
    </div>
</body>
</html>
