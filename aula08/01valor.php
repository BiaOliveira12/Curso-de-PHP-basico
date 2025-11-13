<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercicio 01</title>
</head>
<body>
    <div>
    <?php
    /*  
        form method = "get"  == $v = $_GET["v"];
        form method = "post" == $v = $_POST["v"];
    */
       $valor = $_GET["v"];
       $rq = sqrt($valor);
       echo "A raiz de $valor é igual a ". number_format($rq,2);

    ?>
    <a href="01exercicio.html">Voltar</a>
    </div>
</body>
</html> 