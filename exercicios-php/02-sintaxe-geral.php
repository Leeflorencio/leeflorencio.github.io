<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>
</head>
<body>
    <h1>Sintaxe Geral no PHP</h1>
    <hr>

    <?php
        // Criação de uma variável
        $teste = "Senac";

        //Comando de saída 
        echo $teste;

        echo "<p>Este páragrafo foi gerado via PHP</p>";

        // Não podemos usar duas aspas iguais dentro do comando
        echo "<p class='destaque'>Programador Web</p>";
    ?>

    <! -- Intercalando/Injetando PHP no HTML -->
    <p>Olá! Estamos estudando programação no <?=$teste?></p>

</body>
</html>