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
    <title>Calculando a area do circulo baseado no seu raio</title>
</head>
<body>
    <form method="POST" style="background-color: #f0f4ff; text-align:center;margin:3%; padding:5%">
        <h1>CALCULANDO A AREA DE UM CIRCULO BASEADO NO SEU RAIO<h1>
        <br>
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o valor do raio</label>
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
                    echo $funcao->raio($num);
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