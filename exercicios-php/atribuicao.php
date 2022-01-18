<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h1></h1>

    <?php 
        $preco = $_GET["p"];
        echo "O preco do produto é R$ ". number_format($preco, 2);

        $preco += ($preco*10/100);
        echo "<br/> O novo preço do produto com 10% de aumento é ". number_format($preco, 2);

    ?>
</body>
</html>