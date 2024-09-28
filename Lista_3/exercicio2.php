<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Subtração de Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff3e0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 2px solid #ff9800;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        h1 {
            color: #ff9800;
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
            background-color: #ff9800;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #f57c00;
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
        <h1>Subtrair dois números</h1>
        <form method="post">
            <input type="number" name="num1" placeholder="Digite o primeiro número" required>
            <input type="number" name="num2" placeholder="Digite o segundo número" required>
            <input type="submit" value="Subtrair">
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $subtracao = $num1 - $num2;
                echo "<p>O resultado da subtração é: $subtracao</p>";
            }
        ?>
    </div>
</body>
</html>
