<?php
    namespace Projeto\ti23t\telas;
    include('cabecalho.php');
    require_once('../php/funcoes.php'); //acessando o arquivo
    use Projeto\ti23t\php\Funcao; //acessando a classe que esta no arquivo funcoes.php
    $funcao = new Funcao(); //Construtor da classe funcao ->conectando a index e funcoes
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibindo o salario com base nas horas trabalhadas</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>EXIBINDO O SALARIO COM BASE NAS HORAS TRABALHADAS<h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe por horas trabalhadas</label>
            <input type="number" class="form-control" id="valorHora" name="valorHora">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe quantas horas você trabalhou</label>
            <input type="number" class="form-control" id="horasTrabalhadas" name="horasTrabalhadas">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <?php
            if(isset($_POST['valorHora']) || isset ($_POST['horasTrabalhadas']))
            {
                $valorHora = (float) $_POST['valorHora'];
                $horasTrabalhas = (float) $_POST['horasTrabalhadas'];
            }
        ?>
        <h3>
            <?php
                if(isset($_POST['valorHora']) || isset ($_POST['horasTrabalhadas']))
                {
                    echo $funcao->salario($valorHora, $horasTrabalhas);
                }
                else
                {
                    echo "Preencha os campos!!";
                }
            ?>
        <h3>
    <form>
</body>
</html>