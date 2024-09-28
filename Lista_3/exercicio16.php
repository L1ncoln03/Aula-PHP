<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16 - Preço com Desconto</title>
    <style>
        body { background-color: #ffe0b2; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #ff9800; border-radius: 8px; }
        h1 { text-align: center; color: #fb8c00; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #fb8c00; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular Preço com Desconto</h1>
        <form method="post">
            <input type="number" step="0.01" name="preco" placeholder="Preço Original" required>
            <input type="number" step="0.01" name="desconto" placeholder="Desconto (%)" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $preco = $_POST['preco'];
                $desconto = $_POST['desconto'];
                $precoFinal = $preco * (1 - $desconto / 100);
                echo "<p>Preço com desconto: R$ " . number_format($precoFinal, 2) . "</p>";
            }
        ?>
    </div>
</body>
</html>
