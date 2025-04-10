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

    $livroA = new Livro();
    $livroB = new Livro();

    $livroA -> setTitulo("o reino do amanhã");
    $livroA -> setAutor("Alex Ross");
    $livroA -> setPaginas(50);

    $livroB -> setTitulo("o grande conflito");
    $livroB -> setAutor("ellen g white");
    $livroB -> setPaginas(200); 

    ?>

    
</body>
</html>