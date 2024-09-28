<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffecb3;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 2px solid #ffca28;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #ff9800;
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
        <h1>Exercício 2</h1>
        <?php
            class Funcionario {
                protected $nome;
                protected $salario;

                public function __construct($nome, $salario) {
                    $this->nome = $nome;
                    $this->salario = $salario;
                }

                public function getSalario() {
                    return $this->salario;
                }

                public function setSalario($salario) {
                    $this->salario = $salario;
                }
            }

            class Servente extends Funcionario {
                public function getSalario() {
                    return $this->salario * 1.05; // 5% de insalubridade
                }
            }

            class Motorista extends Funcionario {
                private $carteiraMotorista;

                public function __construct($nome, $salario, $carteiraMotorista) {
                    parent::__construct($nome, $salario);
                    $this->carteiraMotorista = $carteiraMotorista;
                }

                public function getCarteiraMotorista() {
                    return $this->carteiraMotorista;
                }
            }

            class MestreDeObras extends Servente {
                private $numFuncionarios;

                public function __construct($nome, $salario, $numFuncionarios) {
                    parent::__construct($nome, $salario);
                    $this->numFuncionarios = $numFuncionarios;
                }

                public function getSalario() {
                    $adicional = intval($this->numFuncionarios / 10) * 0.10; // 10% por grupo de 10 funcionários
                    return parent::getSalario() * (1 + $adicional);
                }
            }

            $servente = new Servente("Carlos", 2000);
            echo "<p>Salário do servente: R$ " . number_format($servente->getSalario(), 2) . "</p>";

            $motorista = new Motorista("João", 2500, "AB12345");
            echo "<p>Salário do motorista: R$ " . number_format($motorista->getSalario(), 2) . "</p>";
            echo "<p>Carteira do motorista: " . $motorista->getCarteiraMotorista() . "</p>";

            $mestre = new MestreDeObras("Pedro", 3000, 25);
            echo "<p>Salário do mestre de obras: R$ " . number_format($mestre->getSalario(), 2) . "</p>";
        ?>
    </div>
</body>
</html>
