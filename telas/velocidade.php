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
    <title>Mostrando a velocidade media percorrida</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>EXIBINDO A VELOCIDADE MÉDIA</h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe a distancia percorrida</label>
            <input type="number" class="form-control" id="distancia" name="distancia">
        </div>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o tempo gasto</label>
            <input type="number" class="form-control" id="distancia" name="tempo">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <?php
            if(isset($_POST['distancia']) || isset ($_POST['tempo']))
            {
                $distancia = (float) $_POST['distancia'];
                $tempo = (float) $_POST['tempo'];
            }
        ?>
        <h3>
            <?php
                if(isset($_POST['distancia']) || isset($_POST['tempo']))
                {
                    echo $funcao->velocidadeMedia($distancia, $tempo);
                }
                else
                {
                    echo "Preencha os campos!!";
                }
            ?>
        </h3>
    <form>
</body>
</html>