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
    <title>Ler em metros e exibir em centimetros</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>LER EM METROS E EXIBIR EM CENTIMETROS<h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o valor em metros</label>
            <input type="number" class="form-control" id="primeiroNumero" name="primeiroNumero">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <?php
            if(isset($_POST['primeiroNumero']))
            {
                $num = (float) $_POST['primeiroNumero'];
            }
        ?>
        <h3>
            <?php
                if(isset($_POST['primeiroNumero']))
                {
                    echo $funcao->metrosCM($num);
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