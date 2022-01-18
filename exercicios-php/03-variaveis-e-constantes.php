<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
    <style>
        .destaque{ color: purple; }
    </style>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>

    <?php
        /* Variáveis */ 
        $aluno = "Tiago";
        $anoLetivo = 2021;
        $idade = 36;
        $escola = "Senac Penha";

        /* Constantes */
        /* Recomenda-se dar nomes em maiúsculas para as constantes */
        define("DISCIPLINA", "Matemática");
        define("LIVRO", "O Senhor dos Anéis");

        //echo "Gosto muito do livro " .LIVRO;
    ?>

    <h2>Exemplos de saída</h2>
    <p>Olá, meu nome é <span class="destaque"> <?=$aluno?> </span></p>
    <p>Tenho <?=$idade?> anos.</p>

    <ul>
        <li>Escola: <b> <?=$escola?> </b></li>
        <li>Ano Letivo: <?=$anoLetivo?></li>
    </ul>

    <p>Gosto muito do livro <?=LIVRO?></p>
</body>
</html>