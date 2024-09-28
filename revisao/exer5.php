<?php require("cabecalho.php"); ?>
<h1>Atividade 5</h1>
<form action="exer5.php" method="post">
    <div class="row">
        <div class="col">
            <label for="dias_trabalhados" class="form-label">Informe a quantidade de dias trabalhados:</label>
            <input type="number" name="dias_trabalhados" id="dias_trabalhados" class="form-control" required />
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Férias</button>
        </div>
    </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $diasTrabalhados = intval($_POST['dias_trabalhados']);
    $diasFerias = min(floor($diasTrabalhados / 30), 30);
    echo "O funcionário tem direito a $diasFerias dias de férias.";
}

require("rodape.php");
?>
