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
    <title>Descubra a área do retângulo</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>ÁREA DO RETÂNGULO<h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o valor da base</label>
            <input type="number" class="form-control" id="base" name="base">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor da altura</label>
            <input type="number" class="form-control" id="altura" name="altura">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
                $base = (float) $_POST['base'];
                $altura = (float) $_POST['altura'];
            ?>
        </button>
        <h3>
            <?php
                echo $funcao->areaRetangulo($base, $altura);
            ?>
        <h3>
    <form>
</body>
</html>