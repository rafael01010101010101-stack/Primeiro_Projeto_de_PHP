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
    <title>Equação de Segundo Grau</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>EQUAÇÃO DE SEGUNDO GRAU<h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe a sua altura</label>
            <input type="number" step="0.01" class="form-control" id="altura" name="altura">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o seu peso</label>
            <input type="number" step="0.01" class="form-control" id="peso" name="peso">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <?php
            if(isset($_POST['altura']) || isset ($_POST['peso']))
            {
                $altura = (float) $_POST['altura'];
                $peso = (float) $_POST['peso'];
            }
        ?>
        <h3>
            <?php
                if(isset($_POST['altura']) || isset($_POST['peso']))
                {
                    echo $funcao->imc($peso, $altura);
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