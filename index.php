<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>

<body>
    <h1>Exercício 02</h1>
    <hr>
   
    <?php
    require_once "src/enums/Genero.php";
    require_once "src/enums/Formato.php";

    require_once "src/Livro.php";
    require_once "src/Literario.php";
    require_once "src/Tecnico.php";
    require_once "src/Programacao.php";


    $LiterarioA = new Literario("O Reino do Amanhã", "Alex Ross", Genero::AVENTURA);
    $LiterarioB = new Literario("O Grande Conflito", "Ellen G White", Genero::DRAMA);
    $ProgramaA = new Programacao("o reino do amanhã", "Alex Ross",Formato::DIGITAL,"Português");
    $programaB = new Programacao("o grande conflito", "ellen g white",Formato::FISICA,"Inglês");

    ?>


    <h2>Acessando/lendo os dados do objeto</h2>

    <div style="background-color: aquamarine; border:solid; width: 30%;">
    <ul>
        <li><b>Titulo:</b><?= $LiterarioA->getTitulo() ?></li>
        <li><b>Autor:</b><?= $LiterarioA->getAutor() ?></li>
        <li><b>Genero:</b> <?= $LiterarioA->getGenero()->name ?></li>
        <li><b>Formato: </b><?= $ProgramaA->getFormato()->name ?></li>
        <li><b>Linguagem: </b><?= $ProgramaA->getLinguagem() ?></li>
    </ul>
    </div>
    <hr>

    <div style="background-color: cadetblue;border:solid; width: 30%;">
    <ul>
        <li><b>Titulo:</b><?= $LiterarioB->getTitulo() ?></li>
        <li><b>Autor:</b><?= $LiterarioB->getAutor() ?></li>
        <li><b>Genero: </b><?= $LiterarioB->getGenero()->name ?></li>
        <li><b>Formato: </b><?= $programaB->getFormato()->name ?></li>
        <li><b>Linguagem: </b><?= $programaB->getLinguagem()?></li>

    </ul>
    </div>



</body>

</html>