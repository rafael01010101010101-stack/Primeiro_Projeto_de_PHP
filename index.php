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
            </div>
        </div>
    </body>
</html>