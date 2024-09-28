<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Classe Telefone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d1c4e9;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 2px solid #9575cd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #673ab7;
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
        <h1>Exercício 3</h1>
        <?php
            abstract class Telefone {
                protected $ddd;
                protected $numero;

                public function __construct($ddd, $numero) {
                    $this->ddd = $ddd;
                    $this->numero = $numero;
                }

                abstract public function calculaCusto($tempo);
            }

            class Fixo extends Telefone {
                private $custoPorMinuto;

                public function __construct($ddd, $numero, $custoPorMinuto) {
                    parent::__construct($ddd, $numero);
                    $this->custoPorMinuto = $custoPorMinuto;
                }

                public function calculaCusto($tempo) {
                    return $tempo * $this->custoPorMinuto;
                }
            }

            abstract class Celular extends Telefone {
                protected $custoMinutoBase;
                protected $operadora;

                public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
                    parent::__construct($ddd, $numero);
                    $this->custoMinutoBase = $custoMinutoBase;
                    $this->operadora = $operadora;
                }
            }

            class PrePago extends Celular {
                public function calculaCusto($tempo) {
                    return $tempo * $this->custoMinutoBase * 1.40; 
                }
            }

            class PosPago extends Celular {
                public function calculaCusto($tempo) {
                    return $tempo * $this->custoMinutoBase * 0.90;
                }
            }

            // Exemplos de uso
            $fixo = new Fixo(11, '12345678', 0.30);
            echo "<p>Custo da ligação no fixo (10 min): R$ " . number_format($fixo->calculaCusto(10), 2) . "</p>";

            $prePago = new PrePago(11, '98765432', 0.50, 'Operadora X');
            echo "<p>Custo da ligação no pré-pago (10 min): R$ " . number_format($prePago->calculaCusto(10), 2) . "</p>";

            $posPago = new PosPago(11, '87654321', 0.50, 'Operadora Y');
            echo "<p>Custo da ligação no pós-pago (10 min): R$ " . number_format($posPago->calculaCusto(10), 2) . "</p>";
        ?>
    </div>
</body>
</html>
