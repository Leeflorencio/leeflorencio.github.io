<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>
    <h1>Usando funções nativas no PHP</h1>
    <hr>

    <h2>Strings</h2>

    <?php
        /*trim() -> remove espaços antes e depois de uma string */

        $nome = "  Tiago B. dos Santos  ";
        $nomeSemEspaco = trim($nome);
        $nomeSemEspaco = trim($nomeSemEspaco);

    ?>

    <h3>Trim</h3>
    <pre>
        <?=var_dump($nome)?>
    </pre>
    <hr>
    <pre>
        <?=var_dump($nomeSemEspaco)?>
    </pre>

    <hr>

    <h3>Explode</h3>
    <?php
    $linguagens = "HTML - CSS - JS - PHP - C#";
    $arrayLinguagens = explode(" - ", $linguagens);
    ?>

    <pre>
        <?=var_dump($linguagens)?>
        <?=var_dump($arrayLinguagens)?>
    </pre>

    <hr>

    <h3>Implode</h3>
    <?php 
    $arrayEstilos = ["Hard Rock", "Progressivo", "Heavy Metal"];
    $estilos = implode("/", $arrayEstilos);
    ?>

    <pre>
        <?=var_dump($arrayEstilos)?>
        <?=var_dump($estilos)?>

    </pre>

    <hr>

    <h3>Str_replace</h3>
    <?php 
        $frase = "<p>Você é bobão e xarope!</p>";
        $fraseTratada = str_replace(
            ['bobão', 'xarope'],
            ['cara legal', 'genial'],
            $frase
        );
    ?>

    <pre>
        <?=var_dump($frase)?>
        <?=var_dump($fraseTratada)?>
    </pre>

    <hr>

    <h3>Strip_tags</h3>
    <?php
    $html = "<h2> Teste - <a href='http://google.com'>Google</h2>";

    $htmlRemovido = strip_tags($html);
    ?>

    <div>
        <?=$html?>
        <?=$htmlRemovido?>
    </div>
</body>
</html>