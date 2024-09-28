<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Média de Notas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 2px solid #00acc1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        h1 {
            color: #00796b;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="number"], input[type="submit"] {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #00796b;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #004d40;
        }
        p {
            text-align: center;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular a Média de Três Notas</h1>
        <form method="post">
            <input type="number" name="nota1" step="0.01" placeholder="Digite a primeira nota" required>
            <input type="number" name="nota2" step="0.01" placeholder="Digite a segunda nota" required>
            <input type="number" name="nota3" step="0.01" placeholder="Digite a terceira nota" required>
            <input type="submit" value="Calcular Média">
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];
                $media = ($nota1 + $nota2 + $nota3) / 3;
                echo "<p>A média das notas é: " . number_format($media, 2) . "</p>";
            }
        ?>
    </div>
</body>
</html>
