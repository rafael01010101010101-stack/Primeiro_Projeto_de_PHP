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
    <title>Converter idade em dias</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>CONVERTER IDADE EM DIAS</h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe a idade da pessoa</label>
            <input type="number" class="form-control" id="idade" name="idade">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular
            <h2>
                <?php
                    $idade = (float) $_POST['idade'];
                ?>
            </h2>
        </button>
        <br>
        <h3>
            <?php
                echo $funcao->idadeEmDias($idade);
            ?>
        </h3>
    <form>
</body>
</html>