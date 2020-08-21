
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes</title>
    <style>
        h2{
            font-size:12px;
        }
    </style>
</head>
<body>
   <div>
   <?php
        function soma($a, $b){
            $s = $a + $b;
            echo $s;
        }
        soma(4, 5);
    ?> 

   </div>
</body>
</html>