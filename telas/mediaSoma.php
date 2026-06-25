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
    <title>Calculando a media e soma de três numeros</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>CALCULANDO A MÉDIA e SOMA DE TRÊS NUMEROS<h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o valor do primeiro numero</label>
            <input type="number" class="form-control" id="primeiroNumero" name="primeiroNumero">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor do segundo numero</label>
            <input type="number" class="form-control" id="segundoNumero" name="segundoNumero">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor do terceior numero</label>
                <input type="number" class="form-control" id="terceiroNumero" name="terceiroNumero">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <?php
            if(isset($_POST['primeiroNumero']) || isset ($_POST['segundoNumero']) || isset ($_POST['terceiorNumero']))
            {
                $num1 = (float) $_POST['primeiroNumero'];
                $num2 = (float) $_POST['segundoNumero'];
                $num3 = (float) $_POST['terceiroNumero'];
            }
        ?>
        <h3>
            <?php
                if(isset($_POST['primeiroNumero']) || isset ($_POST['segundoNumero']) || isset ($_POST['terceiroNumero']))
                {
                    echo $funcao->mediaTresNumeros($num1, $num2, $num3);
                    echo $funcao->somaTresNumeros($num1, $num2, $num3);
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