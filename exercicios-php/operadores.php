<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php 

        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;
        $m = ($n1 + $n2) / 2;

        echo "A soma vale ". ($n1+$n2);
        echo "<br/>A subtração vale ". ($n1-$n2);
        echo "<br/>A multiplicação vale ". ($n1*$n2);
        echo "<br/>A divisão vale ". ($n1/$n2);
        echo "<br/>O modulo vale ". ($n1%$n2);
        echo "<br/> A média é $m";


        echo "<h2>Obtendo valores da URL com PHP</h2>";

        $p1 = $_GET["a"];
        $p2 = $_GET["b"];

        echo "<h3>Valores recebidos: $p1 e $p2</h3>";



    ?>
</body>
</html>