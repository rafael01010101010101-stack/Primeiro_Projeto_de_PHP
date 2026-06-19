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
            <label for="lPrimeiroNumero" class="form-label">Informe o valor do A</label>
            <input type="number" class="form-control" id="a" name="a">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor do B</label>
            <input type="number" class="form-control" id="b" name="b">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor do C</label>
                <input type="number" class="form-control" id="c" name="c">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
                $a = (float) $_POST['a'];
                $b = (float) $_POST['b'];
                $c = (float) $_POST['c'];
            ?>
        </button>
        <h3>
            <?php
                echo $funcao->segundoGrau($a, $b, $c);
            ?>
        <h3>
    <form>
</body>
</html>