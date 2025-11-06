<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Incremento e decremento</title>
</head>
<body>
    <div>
    <?php
     /*
        Pré-incremento -> $a = $a + 1 ++$a
        Pós-incremento -> $a = $a + 1 $a++
        Pré-decremento -> $a = $a - 1 --$a
         Pós-decremento -> $a = $a - 1 $a--
    */
         $atual = $_GET["aa"]; //pega o ano na URL
         echo "O ano atual é $atual, o ano anterior é ". --$atual;
         //a forma de pós-decremento não apresentaria mudança pois utiliza a variavel primeiro e depois decrementa
         echo " e o ano que vem é ". $atual += 2;
    ?>
    
    </div>
</body>
</html>