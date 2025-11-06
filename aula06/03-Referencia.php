<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Referência de variáveis</title>
</head>
<body>
    <div>
    <?php
        echo "Como fazer referência entre variáveis?<br/>";
         $a = 3;
         $b = $a;
         $b += 5;
         echo "a = $a";
         echo "<br/>b = $b";

         echo "<br/><br/>Referenciando a em b: <br/>";
         $a = 3;
         $b = &$a;
         $b += 5;
         echo "a = $a";
         echo "<br/>b = $b";
    ?>
    
    </div>
</body>
</html>