
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador</title>
    <style>
        h2{
            font-size:12px;
        }
    </style>
</head>
<body>
    <?php
        /*
        ABS () => PEGA  O VALOR ABSOLUTO DE UMA VARIAVEL
        POW () => QUE VAI CRIAR UMA POTENCIAÇÃO
        SQRT () => CRIA UMA RAIZ QUADRADA
        ROUND () => ARREDONDAMENTOs
        INTVAL() => VALOR INTEIRO DE VARIÁVEL
        NUMVER_FORMAT () => FORMATAÇÃO
        */
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h2>Valores recebidos: $v1 e $v2</h2>";

        echo "O valor absoluto de $v2 é ". abs($v2);

        echo "<br/>";

        echo "O valor de $v1<sup>$v2</sup> e" . pow($v1, $v2);
        echo "<br/>";

        echo "A raiz de $v1 e " . sqrt($v1); 
        echo "<br/>";

        echo "O valor de $v2 arredondado é ". round($v2);
        echo "<br/>";

        echo "A parte inteira de $v2 é ". intval($v2);
        echo "<br/>";

        echo "O valor de $v1 em moeda é ". number_format($v1,2);


    ?>

</body>
</html>