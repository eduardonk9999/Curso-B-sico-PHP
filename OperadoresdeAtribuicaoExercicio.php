
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <style>
        h2{
            font-size:12px;
        }
    </style>
</head>
<body>
    <?php
        
        $preco =  $_GET["p"];
        echo "O preço do produto é R$ $preco";

        $preco += ($preco*10/100);
        echo "<br/> E o novo preço com 10% de aumento será $preco";


    ?>

</body>
</html>