<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19 - Converter Dias</title>
    <style>
        body { background-color: #bbdefb; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #2196f3; border-radius: 8px; }
        h1 { text-align: center; color: #1976d2; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #1976d2; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Converter Dias para Horas, Minutos e Segundos</h1>
        <form method="post">
            <input type="number" name="dias" placeholder="Valor em dias" required>
            <button type="submit">Converter</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $dias = $_POST['dias'];
                $horas = $dias * 24;
                $minutos = $horas * 60;
                $segundos = $minutos * 60;
                echo "<p>$dias dias equivalem a: $horas horas, $minutos minutos e $segundos segundos</p>";
            }
        ?>
    </div>
</body>
</html>
