<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Soma de Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 2px solid #1e90ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        h1 {
            color: #1e90ff;
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
            background-color: #1e90ff;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4682b4;
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
        <h1>Somar dois números</h1>
        <form method="post">
            <input type="number" name="num1" placeholder="Digite o primeiro número" required>
            <input type="number" name="num2" placeholder="Digite o segundo número" required>
            <input type="submit" value="Somar">
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $soma = $num1 + $num2;
                echo "<p>O resultado da soma é: $soma</p>";
            }
        ?>
    </div>
</body>
</html>
