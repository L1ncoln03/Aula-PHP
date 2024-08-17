<?php require("cabecalho.php"); ?>

<h1>Exercício 2</h1>
<form action="exer2.php" method="post">
    <div class="row">
        <div class="col">
            <label for="hora_inicial" class="form-label">
                Informe as horas trabalhadas:  
            </label>
            <input type="number" name="hora_trabalhada" id="hora_trabalhada" class="form-control"/> 
        </div>
        <div class="col">
            <label for="valor_hora" class="form-label">
                Informe o valor da hora:
            </label>
            <input type="number" name="valor_hora" id="valor_hora"class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular</button>
        </div>
    </div>
</form>
<?php 
    if ($_POST){
        $hora_trabalhada = ($_POST["hora_trabalhada"]);
        $valor_hora =($_POST["valor_hora"]);
        $salario = $hora_trabalhada * $valor_hora;
        $salario_semanal = $salario * 6;
        echo "O salario semanal é de: ".$salario_semanal;
    }






require("rodape.php"); ?>