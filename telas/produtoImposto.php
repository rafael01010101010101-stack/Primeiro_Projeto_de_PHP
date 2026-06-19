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
    <title>Adicionar 18% de imposto ao produto</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>ADICIONANDO 18% DE IMPOSTO AO PRODUTO</h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe a valor do produto</label>
            <input type="number" class="form-control" id="produto" name="produto">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular
            <h2>
                <?php
                    $valor = (float) $_POST['produto'];
                ?>
            </h2>
        </button>
        <br>
        <h3>
            <?php
                echo $funcao->colocarImposto($valor);
            ?>
        </h3>
    <form>
</body>
</html>