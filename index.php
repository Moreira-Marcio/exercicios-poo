<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>
    
    <?php
    require_once "src/Livro.php";

    $livroA = new Livro("o reino do amanhã","Alex Ross",50);
    $livroB = new Livro("o grande conflito","ellen g white",400);
?>
    
    
    <h2>Acessando/lendo os dados do objeto</h2>
<ul>
    <li><b>Nome:</b><?=$livroA->getTitulo()?></li>
    <li><b>Idade:</b><?=$livroA->getAutor()?></li>
    <li><b>E-mail:</b><?=$livroA->getTitulo()?></li>
    

</ul>
<ul>
     <li><b>Nome:</b><?=$livroB->getTitulo()?></li>
    <li><b>Idade:</b><?=$livroB->getAutor()?></li>
    <li><b>E-mail:</b><?=$livroB->getPaginas()?></li>
    

</ul>

    

    
</body>
</html>