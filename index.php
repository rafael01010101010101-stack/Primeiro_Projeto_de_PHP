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
        <h1>Boas Vindas</h1>
        <a href= "telas/somar.php" class="btn btn-primary">Somar</a>
        <a href= "telas/subtrair.php" class="btn btn-primary">Subtrair</a>
        <a href= "telas/multiplicar.php" class="btn btn-primary">Multiplicar</a>
        <a href= "telas/dividir.php" class="btn btn-primary">Dividir</a>
    </body>
</html>