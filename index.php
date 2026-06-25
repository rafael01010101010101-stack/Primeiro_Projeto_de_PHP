<?php namespace Projeto\ti23t; //: comentario dentro do php
    include('telas/cabecalho.php');//reaproveitando o boostrap pelo cabelhaço
?> 
<!--comentario em html -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>
    <body>
        <div style="background-color: #f0f4ff; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh;">
            <h1>Boas Vindas</h1>
            <br>
            <h3>Escolha uma das opções abaixo:</h3>
            <br>
            <div style="display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;">
                <a href= "telas/somar.php" class="btn btn-primary">Somar</a>
                <br>
                <a href= "telas/subtrair.php" class="btn btn-primary">Subtrair</a>
                <br>
                <a href= "telas/multiplicar.php" class="btn btn-primary">Multiplicar</a>
                <br>
                <a href= "telas/dividir.php" class="btn btn-primary">Dividir</a>
                <br>
                <a href= "telas/segundoGrau.php" class="btn btn-primary">Equação de Segundo Grau</a>
                <br>
                <a href= "telas/imc.php" class="btn btn-primary">IMC</a>
                <br>
                <a href= "telas/areaRetangulo.php" class="btn btn-primary">Calcule a área do retângulo</a>
                <br>
                <a href= "telas/areaTriangulo.php" class="btn btn-primary">Calcule a área do triângulo</a>
                <br>
                <a href= "telas/produtoImposto.php" class="btn btn-primary">Adicionar 18% de imposto ao produto</a>
                <br>
                <a href= "telas/idadeDias.php" class="btn btn-primary">Convertendo idade em dias</a>
                <br>
                <a href= "telas/dobroNumero.php" class="btn btn-primary">Lendo e Exibindo o dobro de um numero</a>
                <br>
                <a href= "telas/mediaTresNumeros.php" class="btn btn-primary">Média de três numeros</a>
                <br>
                <a href= "telas/raizQuadrada.php" class="btn btn-primary">Lendo e exibindo a raiz quadrada de um numero</a>
                <br>
                <a href= "telas/metrosCentimetros.php" class="btn btn-primary">Lendo em metros e exibindo em centimetros</a>
                <br>
                <a href= "telas/areaCirculo.php" class="btn btn-primary">Calcule a area de um circulo baseado no raio</a>
                <br>
                <a href= "telas/celsiusFahrenheit.php" class="btn btn-primary">Converter celsius em fahrenheit</a>
                <br>
                <a href= "telas/desconto.php" class="btn btn-primary">Colocando 10% de desconto a um produto</a>
                <br>
                <a href= "telas/idadeMeses.php" class="btn btn-primary">Convertendo idade em meses</a>
                <br>
                <a href= "telas/imparPar.php" class="btn btn-primary">Impar ou par</a>
                <br>
                <a href= "telas/volumeRetangulo.php" class="btn btn-primary">Exibindo o volume do retangulo</a>
                <br>
                <a href= "telas/quadradoCubo.php" class="btn btn-primary">Ler um numero e exibir sua raiz quadrada e cubica</a>
                <br>
                <a href= "telas/velocidade.php" class="btn btn-primary">Exibindo a velocidade media</a>
                <br>
                <a href= "telas/mediaDoisNumeros.php" class="btn btn-primary">Exibindo a media de dois numeros</a>
                <br>
                <a href= "telas/salario.php" class="btn btn-primary">Exibindo o salario com base nas horas trabalhadas</a>
                <br>
                <a href= "telas/tempoVida.php" class="btn btn-primary">Exibindo quanto tempo de vida resta até 100 anos</a>
                <br>
                <a href= "telas/mediaSoma.php" class="btn btn-primary">Exibindo a media e soma de tres numeros</a>
            </div>
        </div>
    </body>
</html>