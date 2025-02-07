<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da pesquisa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Resultado da pesquisa</h1>

</header>
<main>
    <?php 
    //var_dump($_REQUEST);//Junção de GET e POST=REQUEST
    $n= $_GET["nome"] ?? "(Nome não informado)";
    $i= $_GET["idade"] ?? "(Não foi infomado a idade)";
    echo "<p> É uma enorme prazer recebelho(a), <p></p><strong>$n</strong>  de $i anos de idade! Este é um teste para meu apredizado";
    ?>
    
   <p> <a href="javascript:history.go(-1)">Voltar</a></p>

</main>
    
</body>
</html>