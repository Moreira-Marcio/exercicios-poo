<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 0</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>
    
    <?php
    require_once "src/Livro.php";
    require_once "src/literario.php";
    require_once "src/tecnico.php";
    require_once "enums/Formato.php";
    require_once "enums/Genero.php";

    $livroA = new Livro("o reino do amanhã","Alex Ross",50,Genero::AVENTURA);
    $livroB = new Livro("o grande conflito","ellen g white",400,Genero::DRAMA);
?>
    
    
    <h2>Acessando/lendo os dados do objeto</h2>
<ul>
    <li><b>Titulo:</b><?=$livroA->getTitulo()?></li>
    <li><b>Autor:</b><?=$livroA->getAutor()?></li>
    <li><b>Paginas:</b><?=$livroA->getTitulo()?></li>
    <li><b>Genero:</b> <?=$livroA->getGenero()->name?></li>
    

</ul>
<ul>
     <li><b>Titulo:</b><?=$livroB->getTitulo()?></li>
    <li><b>Autor:</b><?=$livroB->getAutor()?></li>
    <li><b>Paginas:</b><?=$livroB->getPaginas()?></li>
    

</ul>

    

    
</body>
</html>