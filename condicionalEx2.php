
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
   <div>
   <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
      

        switch ($o) {
            case 1:
                $r = $n * 2;
                break;    
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n);    
        }

        echo "O resultado da operação solicidade foi $r";
    ?> 

   </div>
</body>
</html>