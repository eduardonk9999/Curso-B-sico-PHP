
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicao</title>
    <style>
        h2{
            font-size:12px;
        }
    </style>
</head>
<body>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        
        echo "Voce nasceu em $a e tera $i anos. </br>";

        if($i >= 18) {
            $v = "Já pode votar";
            $d = "Já pode dirigir";
        } else {
            $v = "Não pode votar";
            $d = "Não pode dirigir";
        }

        echo "Com essa idade você $v e também $d...";

    ?> 

</body>
</html>