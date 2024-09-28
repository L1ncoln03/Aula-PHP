<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Metros para Centímetros</title>
    <style>
        body { background-color: #d1c4e9; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #673ab7; border-radius: 8px; }
        h1 { text-align: center; color: #5e35b1; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #5e35b1; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Converter Metros para Centímetros</h1>
        <form method="post">
            <input type="number" step="0.01" name="metros" placeholder="Valor em metros" required>
            <button type="submit">Converter</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $metros = $_POST['metros'];
                $centimetros = $metros * 100;
                echo "<p>$metros metros é igual a " . number_format($centimetros, 2) . " cm</p>";
            }
        ?>
    </div>
</body>
</html>
