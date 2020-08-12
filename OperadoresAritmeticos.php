
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador</title>
</head>
<body>
    <?php
        /*
        SOMA +
        SUBTRAÇÃO -
        MULTIPLICAÇÃO *
        DIVISÃO /
        MÓDULO %
        

        ABS () => PEGA  O VALOR ABSOLUTO DE UMA VARIAVEL
         
        */

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $s = $n1 + $n2; 
    
        echo "A SOMA VALE ". $s;
    ?>

</body>
</html>