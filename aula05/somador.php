<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operações aritmeticas</title>
</head>
<body>
    <div>
    <?php
    /*http://127.0.0.1/olamundo/aula05/somador.php?a=5&b=2*/
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2>Valores recebidos:  $n1 e $n2</h2>";
    $s = $n1 + $n2;
    $m = ($n1 + $n2) /2;
    echo "O valor de a é $n1";
    echo "<br/>O valor de b é $n2";
    echo "<br/>A soma de a e b é igual a $s";
    echo "<br/>A soma vale ". ($n1+ $n2);
    echo "<br/>A subtração vale ". ($n1-$n2);
    echo "<br/>A multiplicação vale ". ($n1*$n2);
    echo "<br/>A divisão vale ". ($n1/$n2);
    echo "<br/>O módulo vale ". ($n1%$n2);
    echo "<br/>A media vale $m";
    echo "<br/>";
    
    /*
    Adição +
    Subtração -
    Multiplicação *
    Divisão /
    Modulo %
    */
    ?>
    
    </div>
</body>
</html>