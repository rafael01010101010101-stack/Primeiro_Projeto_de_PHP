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
    <title>Multiplicar</title>
</head>
    <body>
        <form method="POST" style="text-align:center;margin:3%; padding:5%">
            <h1>Multiplicar<h1>
                <br>
                <div class="mb-3">
                    <label for="lPrimeiroNumero" class="form-label">Informe o primeiro numero</label>
                    <input type="number" class="form-control" id="primeiroNumero" name="primeiroNumero">
                </div>
                <div class="mb-3">
                    <label for="lSegundoNumero" class="form-label">Informe o segundo numero</label>
                    <input type="number" class="form-control" id="segundoNumero" name="segundoNumero">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Multiplicar
                <?php
                    $num1 = $_POST['primeiroNumero'];
                    $num2 = $_POST['segundoNumero'];
                    //chamando a variavel que representa a classe funcao
                    $funcao->coletar($num1, $num2);
                ?>
            </button>
            <h2>
                <?php
                    echo $funcao->multiplicar();
                ?>
            <h2>
        <form>
    </body>
</html>