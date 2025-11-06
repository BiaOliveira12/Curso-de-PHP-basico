<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operador Unário</title>
</head>
<body>
    <div>
    <?php
        /* 
        Maior $a > $b
        Menor $a < $b
        Maior ou igual $a >= $b
        Menor ou igual $a <= $b
        Diferente $a <> $b ou $a != $b
        Igual $a == $b
        Idêntico $a === $b -> igual e do mesmo tipo

        Operador Unário
        (expressão) ? (verdadeiro) : (falso)
        $maior = $a > $b ? $a : $b
        ou 
        Se (a > b) então 
            maior <- a
        senão
            maior <- b
        FimSe

        $r = $a > $b ? $a + $b : $a - $b
        $sit = $media < 7 ? "recuperação" : "aprovado"
         */
        $n1 = $_GET["a"]; //pega os valores pela URL ex: ?a=1
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "Os valores passados foram $n1 e $n2 <br/>";
        $r = ($tipo == "s") ? $n1 + $n2 : $n1*$n2;
        echo "O resultado será $r";
    ?>
    </div>
</body>
</html>