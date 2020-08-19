
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
        $anoAtual = $_GET["a"];
        echo "o ano anterior é ". --$anoAtual;
    ?>

</body>
</html>