<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores de atribuição</title>
</head>
<body>
    <div>
    <?php
        /* $b = $b + $a ou $b += $a 
           $a = $a + 1 ou $a += 1 ou $a++ */
           $preco = $_GET["p"];
           $valor = $_GET["v"];
           echo "Aplicar 10% de aumento ao preço de um produto:";
           echo "<br/><br/>O preço do produto é: R$ ". number_format($preco,2);
           $preco += ($preco*10/100); //ou $preco = $preco + ($preco*10/100)
           echo "<br/>O preço com 10% de aumento será R$ ". number_format($preco,2);

           echo "<br/><br/>Aplicar 10% de desconto ao preço de um produto:";
           echo "<br/><br/>O valor do produto é: R$ ". number_format($valor,2);
            $valor -= ($valor*10/100); //ou $valor = $valor - ($valor*10/100)
           echo "<br/>O preço com 10% de desconto será R$ ". number_format($valor,2);
    ?>
    
    </div>
</body>
</html>