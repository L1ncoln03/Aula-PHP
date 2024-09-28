<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Área do Círculo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3e5f5;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 2px solid #ab47bc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #8e24aa;
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
        <h1>Calcular a Área do Círculo</h1>
        <form method="post">
            <input type="number" step="0.01" name="raio" placeholder="Digite o raio" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $raio = $_POST['raio'];
                $area = pi() * pow($raio, 2);
                echo "<p>A área do círculo é: " . number_format($area, 2) . " m²</p>";
            }
        ?>
    </div>
</body>
</html>
