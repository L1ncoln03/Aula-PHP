<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20 - Velocidade Média</title>
    <style>
        body { background-color: #f8bbd0; font-family: Arial, sans-serif; }
        .container { margin: 0 auto; max-width: 400px; padding: 20px; background-color: #fff; border: 2px solid #f50057; border-radius: 8px; }
        h1 { text-align: center; color: #c51162; }
        input, button { padding: 10px; margin: 5px 0; border-radius: 4px; }
        button { background-color: #c51162; color: white; cursor: pointer; }
        p { text-align: center; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcular Velocidade Média</h1>
        <form method="post">
            <input type="number" step="0.01" name="distancia" placeholder="Distância (km)" required>
            <input type="number" step="0.01" name="tempo" placeholder="Tempo (horas)" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $distancia = $_POST['distancia'];
                $tempo = $_POST['tempo'];
                if ($tempo != 0) {
                    $velocidadeMedia = $distancia / $tempo;
                    echo "<p>A velocidade média é: " . number_format($velocidadeMedia, 2) . " km/h</p>";
                } else {
                    echo "<p>Erro: O tempo não pode ser zero.</p>";
                }
            }
        ?>
    </div>
</body>
</html>
