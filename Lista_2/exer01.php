<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Classe Ponto</title>
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
        }
        h1 {
            color: #00796b;
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
        <h1>Exercício 1: Classe Ponto</h1>
        <?php
            class Ponto {
                private $x;
                private $y;
                private static $contador = 0;

                public function __construct($x, $y) {
                    $this->x = $x;
                    $this->y = $y;
                    self::$contador++;
                }

                public static function getContador() {
                    return self::$contador;
                }

                public function distanciaParaPonto(Ponto $outroPonto) {
                    return sqrt(pow($this->x - $outroPonto->x, 2) + pow($this->y - $outroPonto->y, 2));
                }

                public function distanciaParaCoordenadas($x, $y) {
                    return sqrt(pow($this->x - $x, 2) + pow($this->y - $y, 2));
                }

                public static function distanciaEntrePontos($x1, $y1, $x2, $y2) {
                    return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
                }
            }

            $p1 = new Ponto(1, 2);
            $p2 = new Ponto(4, 6);
            echo "<p>Número de pontos criados: " . Ponto::getContador() . "</p>";
            echo "<p>Distância entre p1 e p2: " . $p1->distanciaParaPonto($p2) . "</p>";
            echo "<p>Distância entre p1 e (3, 4): " . $p1->distanciaParaCoordenadas(3, 4) . "</p>";
            echo "<p>Distância entre (1, 2) e (4, 6): " . Ponto::distanciaEntrePontos(1, 2, 4, 6) . "</p>";
        ?>
    </div>
</body>
</html>
