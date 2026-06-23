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
    <title>Descubra o volume do retângulo</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>VOLUME DO RETÂNGULO<h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o valor da comprimento</label>
            <input type="number" class="form-control" id="comprimento" name="comprimento">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor do largura</label>
            <input type="number" class="form-control" id="largura" name="largura">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor da altura</label>
            <input type="number" class="form-control" id="altura" name="altura">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <?php
            if(isset($_POST['comprimento']) || isset ($_POST['largura']) || isset ($_POST['altura']))
            {
                $comprimento = (float) $_POST['comprimento'];
                $largura = (float) $_POST['largura'];
                $altura = (float) $_POST['altura'];
            }
        ?>
        <h3>
            <?php
                if(isset($_POST['comprimento']) || isset($_POST['largura']) || isset($_POST['altura']))
                {
                    echo $funcao->volumeRetangulo($comprimento, $largura, $altura);
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